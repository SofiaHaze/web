<?
include 'db_connect.php';

$email=$_POST["form_email"];
$password=$_POST['form_password'];

/*
//display data
$result=mysqli_query($con,"select * from member");
$total=mysqli_num_rows($result); 

for($i=0;$i<$total;$i++){
$row = $result->fetch_object();
?>
   	<table border=1 width=110>
	<td align=right>id</td>
	<td><input type="text" name="email" value=<? echo"$row->id" ?> size=50></td>
	</tr>
					
	<td align=right>password</td>
	<td><input type="text" name="password" value=<?echo"$row->password"?> size=50></td>
	</tr>
	</table>
<?			
}
?>
*/

//왜안되? $sql="select email FROM member where email=\"$email\" and password=\"password($password)\"";
$sql="select email FROM member where email=\"$email\" and password=\"$password\"";
//가능 $sql="SELECT email FROM member WHERE email='$email' and password='$password'";


$result=mysqli_query($con,$sql);
//mysqli_query()함수는 결과 값을 반환받아 해당 변수($result)에 데이터를 반환합니다.
//하지만 insert와 같은 쿼리문은 실제 데이터를 반환하는것이 아니라 쿼리가 성공적으로 수행됬는지 참과 거짓여부만 반환합니다.


$total=mysqli_num_rows($result); 

 // If result matched $myusername and $mypassword, table row must be 1 row
if($total==1)  //count가 1이라는 것은 아이디와 패스워드가 일치하는 db가 하나 있음을 의미합니다. 
{
	session_start();   //세션의 시작
	$_SESSION['email'] = $email;
	
	echo "환영합니다 관리자님!^^"; 
	echo "<meta http-equiv='refresh' content='2; url=index.php'>";
}
else 
{
	echo "관리자가 아니거나 비밀번호가 틀렸습니다. 2초 뒤 메인페이지로 이동합니다!"; 
	echo "<meta http-equiv='refresh' content='2; url=index.php'>"; 
}
?>