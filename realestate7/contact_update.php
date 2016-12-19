<?php
include_once "db_connect.php";

$name = $_POST["name"];
$email = $_POST["email"];
$phone_number = $_POST["phone_number"];
$consult = $_POST["consult"];

$sql = "Insert into consult values('$name','$email','$phone_number','$consult')";

$result = $con -> query($sql);

if($result=== TRUE){
	$msg = "문의가 정상적으로 등록되었습니다. 조금만 기다려주시면 회신 드리겠습니다.";
	echo "<script type = 'text/javascript'> alert('$msg'); </script>";
}
else{
	$msg = "문의가 등록되지 않았습니다. 다시 한번 시도해주세요";
	echo "<script type = 'text/javascript'> alert('$msg'); </script>";
}

echo "<meta http-equiv='refresh' content='0.5; url=index.php'>";

?>
