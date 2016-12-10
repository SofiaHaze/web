<?
$con=mysqli_connect('localhost:3306','root','root','web');
echo "DB Connect Success !";

$email=$_REQUEST["exampleInputEmail2"];
$password=$_REQUEST["exampleInputPassword2"];

echo "$email"."password";
/*
$result=mysqli_query($con,"select * from actors"); 

삽입
$result=mysqli_query($con,"INSERT INTO `lab9`.`actors` (`id`, `first_name`, `last_name`, `gender`) VALUES ('2009122174', 'seongcheol', 'shin', 'm')"); 
*/

$result=mysqli_query($con,"select * from member");
//ÀÌ°Å ¿Ö¾ÈµÇ´ÂÁö µµÅë¸ð¸£°Ú´Ù.. $editname°¡ Àü´ÞÀÌ ¾ÈµÇ³×..;
//$total=mysqli_num_rows($result); //ÃÑ·¹ÄÚµå °¹¼ö ¼¼´Â ÇÔ¼ö


for($i=0;$i<$total;$i++){
$row = $result->fetch_object();
   		echo("
   				<table border=1 width=110>
				<td align=right>id</td>
				<td><input type=text name=email value='$row->id' size=50></td>
				</tr>
					
				<td align=right>first_name</td>
				<td><input type=text name=password value='$row->password' size=50></td>
				</tr>
				
				</table>
				
			");  		 
}
?>
