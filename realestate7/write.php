<?php
	require_once("db_connect.php");
	require_once "header.php";
	//$_GET['bno']이 있을 때만 $bno 선언
	if(isset($_GET['bno'])) {
		$bNo = $_GET['bno'];
	}
		 
	if(isset($bNo)) {
		$sql = "select b_title, b_content, b_id from board_free where b_no = ". $bNo;
		$result = $con->query($sql);
		$row = $result->fetch_assoc();
	}
?>

<!--반응형 적용-->
<div class="inside-banner" id="main-content">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / review / detail</span>
    <h2>후기 내용</h2>
</div>
</div>
<!-- banner -->

<!--역시 반응형-->
<div class="container">
  <div class="properties-listing spacer"> <a href="buysalerent.php" class="pull-right viewall">매물 전체보기</a>

<article class="boardArticle">
		<h3>수정하기</h3>
		<div id="boardWrite">
			<form action="./write_update.php" method="post">
				<?php
				if(isset($bNo)) {
					echo '<input type="hidden" name="bno" value="' . $bNo . '">';
				}
				?>
				<table id="boardWrite">
					<!--<caption class="readHide">자유게시판 글쓰기</caption>-->
					<tbody>
						<tr>
							<th scope="row"><label for="bID">아이디</label></th>
							<td class="id">
								<?php
								if(isset($bNo)) {
									echo $row['b_id'];
								} else { ?>
									<input type="text" name="bID" id="bID">
								<?php } ?>
							</td>
						</tr>
						<tr>
							<th scope="row"><label for="bPassword">비밀번호</label></th>
							<td class="password"><input type="password" name="bPassword" id="bPassword"></td>
						</tr>
						<tr>
							<th scope="row"><label for="bTitle">제목</label></th>
							<td class="title"><input type="text" name="bTitle" id="bTitle" value="<?php echo isset($row['b_title'])?$row['b_title']:null?>"></td>
						</tr>
						<tr>
							<th scope="row"><label for="bContent">내용</label></th>
							<td class="content"><textarea name="bContent" id="bContent"><?php echo isset($row['b_content'])?$row['b_content']:null?></textarea></td>
						</tr>
					</tbody>
				</table>
				<div class="btnSet">
					<button type="submit" class="btnSubmit btn">
						<?php echo isset($bNo)?'수정':'작성'?>
					</button>
					<a href="./index.php" class="btnList btn">목록</a>
				</div>
			</form>
		</div>
	</article>
 </div>
 </div>

<? include_once "footer.php"; ?>