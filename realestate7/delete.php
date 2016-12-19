<?php
	require_once("db_connect.php");
	require_once("header.php");
	//$_GET['bno']이 있어야만 글삭제가 가능함.
	if(isset($_GET['bno'])) {
		$bNo = $_GET['bno'];
	}
?>

<!--반응형 적용-->
<div class="inside-banner" id="main-content">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / review / detail</span>
    <h2>후기 내용</h2>
</div>
</div>


<div class="container">
  <div class="properties-listing spacer"> <a href="buysalerent.php" class="pull-right viewall">매물 전체보기</a>
	<article class="boardArticle">
		<h3>자유게시판 글삭제</h3>
		<?php
			if(isset($bNo)) {
				$sql = 'select count(b_no) as cnt from board_free where b_no = ' . $bNo;
				$result = $con->query($sql);
				$row = $result->fetch_assoc();
				if(empty($row['cnt'])) {
		?>
		<script>
			alert('글이 존재하지 않습니다.');
			history.back();
		</script>
		<?php
			exit;
				}
				
				$sql = 'select b_title from board_free where b_no = ' . $bNo;
				$result = $con->query($sql);
				$row = $result->fetch_assoc();
		?>

		<div id="boardDelete">
			<form action="./delete_update.php" method="post">
				<input type="hidden" name="bno" value="<?php echo $bNo?>">
				<table>
					<thead>
						<tr>
							<th scope="col" colspan="2">글삭제</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">글 제목</th>
							<td><?php echo $row['b_title']?></td>
						</tr>
						<tr>
							<th scope="row"><label for="bPassword">비밀번호</label></th>
							<td><input type="password" name="bPassword" id="bPassword"></td>
						</tr>
					</tbody>
				</table>

				<div class="btnSet">
					<button type="submit" class="btnSubmit btn">삭제</button>
					<a href="./index.php" class="btnList btn">목록</a>
				</div>
			</form>
		</div>
		
	<?php
		//$bno이 없다면 삭제 실패
		} else {
	?>
		<script>
			alert('정상적인 경로를 이용해주세요.');
			history.back();
		</script>
	<?php
			exit;
		}
	?>
	</article>
 </div>
</div>
