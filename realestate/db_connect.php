<?
$con=mysqli_connect('localhost:3306','root','root','web');

if($con->connect_error) {
		die('데이터베이스 연결에 문제가 있습니다.\n관리자에게 문의 바랍니다.');
	}
$con->set_charset('utf8');
?>