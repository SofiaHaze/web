<?php
	require_once("db_connect.php");
	$bNo = $_GET['bno'];

	if(!empty($bNo) && empty($_COOKIE['board_free_' . $bNo])) {
		$sql = 'update board_free set b_hit = b_hit + 1 where b_no = ' . $bNo;
		$result = mysqli_query($con,$sql); 
		//if(empty($result)) {
		if(!isset($result)){
			?>
			<script>
				alert('오류가 발생했습니다.');
				history.back();	
			</script>
			<?php 
		} else {
			setcookie('board_free_' . $bNo, TRUE, time() + (60 * 60 * 24), '/');
		}
	}
	
	$sql = "select b_title, b_content, b_date, b_hit, b_id from board_free where b_no =". $bNo;
	$result = mysqli_query($con,$sql);
	$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>구의동 월드부동산</title>				
	<link rel="stylesheet" href="./css/normalize.css" />
	<link rel="stylesheet" href="./css/board.css" />
	<script src="./js/jquery-2.1.3.min.js"></script>
</head>
<body>
	<article class="boardArticle">
		<h3>자유게시판 글쓰기</h3>
		<div id="boardView">
			<h3 id="boardTitle"><?php echo $row['b_title']?></h3>
			<div id="boardInfo">
				<span id="boardID">작성자: <?php echo $row['b_id']?></span>
				<span id="boardDate">작성일: <?php echo $row['b_date']?></span>
				<span id="boardHit">조회: <?php echo $row['b_hit']?></span>
			</div>
			<div id="boardContent"><?php echo $row['b_content']?></div>
			
			<!-- 오른쪽 정렬 -->
			<div class="btnSet">
				<a href="./write.php?bno=<?php echo $bNo?>">수정</a>
				<a href="./delete.php?bno=<?php echo $bNo?>">삭제</a>
				<a href="./">목록</a>
			</div>
		<div id="boardComment">
			<?php require_once('./comment.php')?>
		</div>
		</div>
	</article>
</body>
</html>