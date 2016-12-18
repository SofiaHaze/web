
<?php
include 'db_connect.php';

$name=$_POST["form_name"];
$email=$_POST["form_email"];
$password=md5($_POST["form_password"]);
$address=$_POST["form_address"];

$sql="insert into member values ('$name','$email','$password','$address')";
$result=mysqli_query($con,$sql);

if($result){
	echo "successfully registered!";
}else{
	echo "sorry ~";
}
	echo "wait for few seconds !";
	echo "<meta http-equiv='refresh' content='2; url=index.php'>"; 
?>
