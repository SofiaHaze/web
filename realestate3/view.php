<?php
	require_once("db_connect.php");
	include_once "header.php";
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

<!--반응형 적용-->
<div class="inside-banner" id="main-content">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / review / detail</span>
    <h2>후기 내용</h2>
</div>
</div>
<!-- banner -->

<div class="container">
  <div class="properties-listing spacer"> <a href="buysalerent.php" class="pull-right viewall">매물 전체보기</a>

	<article class="boardArticle">
			<h3>제목</h3>
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
				<a href="review.php">목록</a>
			</div>
			
			<div id="boardComment">
			<? require_once('./comment.php'); ?>
			</div>
			</div>
	</article>
 </div>
</div>

<? include_once "footer.php";?>	