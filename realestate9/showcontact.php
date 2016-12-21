<?php
  include 'header.php';
  include_once 'db_connect.php';
?>

<!-- banner -->
<div class="inside-banner" id="main-content">
  <div class="container">
    <span class="pull-right"><a href="index.php">홈</a> / 문의보기</span>
    <h2>문의보기</h2>
	</div>
</div>
<!-- banner -->

<?php
  if(!isset($_SESSION['email'])) {
    $msg = "관리자 로그인이 필요합니다";
    echo "<script type='text/javascript'>alert('$msg');</script>";
    echo "<meta http-equiv='refresh' content='0.3; url=index.php'>";
  }
?>

<div class="container">
<div class="properties-listing spacer">
  <div class="row">
	  <div class="col-lg-3 col-sm-4 col-xs-12">
      <div class="hot-properties">
          <?php

          $sql ="select * from consult order by id desc";

          $result = mysqli_query($con,$sql);

          // 페이징
          $page = (isset($_GET['page']))?$_GET['page']:1;
          $num = mysqli_num_rows($result);
          $list = 5;
          $block = 5;
          $pageNum = ceil($num/$list);
          $blockNum = ceil($pageNum/$block);
          $nowBlock = ceil($page/$block);

          $s_page = ($nowBlock * $block) - ($block - 1);

          if ($s_page <= 1) {
              $s_page = 1;
          }
          $e_page = $nowBlock*$block;
          if ($pageNum <= $e_page) {
              $e_page = $pageNum;
          }
          ?>

          <!-- 페이징 -->
          <div class="row">
            <h4>문의</h4>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr class="active">
                    <th>#</th>
                    <th>이름</th>
                    <th>문의시각</th>
                  </tr>
                </thead>
                  <?php
                  $s_point = ($page-1)*$list;
                  $sql1 ="select * from consult order by id desc limit $s_point,$list";
                  $result1 = mysqli_query($con,$sql1);
                  while($row=mysqli_fetch_array($result1)){
                  ?>
              <tbody>
                <tr class="active">
                  <td><?php echo $row["id"]; ?></td>
                  <td><?php echo "<a href="."showcontact.php?id=".$row["id"].">";
                  echo $row["name"]?> </td>
                  <td><?php echo $row["date"]; ?></td>
                </tr>
              </tbody>
                <?php } ?>
            </table>
            <div class="center">
              <a href="<?php echo $_SERVER['PHP_SELF'];?>?page=<?php  if($s_page===1){echo $s_page;} else {echo $s_page-1;}?>"><<</a>
              <?php
              for ($p=$s_page; $p<=$e_page; $p++) {
              ?>
                <a href="<?php echo $_SERVER['PHP_SELF'];?>?page=<?php echo $p;?>"><?php echo $p;?></a>
              <?php
              }
              ?>
              <a href="<?php echo $_SERVER['PHP_SELF'];?>?page=<?php echo $e_page+1;?>">>></a>
            </div>
            </div>
          </div>
       </div>
    </div>

  	<div class="col-lg-9 col-sm-8 col-xs-12">
  		<div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12">
          <h4></h4>
        </div>
        <?php
          /* 검색 시작 */
          if(isset($_GET['id'])) {
            $id = $_GET['id'];
          }
          if(isset($id)) {
              $searchSql = " where id="."\"".$id."\"";
          } else {
            $searchSql = '';
          }
          /* 검색 끝 */

          $sql ="select * from consult". $searchSql;

          $result = mysqli_query($con,$sql);
          $row=mysqli_fetch_array($result);
        ?>

		     	<!--
		     	매물등록 폼. 들어가야할 내용
		     	이름, (매매, 전세, 월세), 매물종류, 가격, 크기, 방 개수(침실 거실 주방), 주소, 사진, 간단한 설명
		     	-->
		     	<div>
              <div class="form-group">
                <label class="control-label col-lg-2 col-sm-3 col-xs-2">문의번호:</label>
                <div class="col-lg-1 col-sm-1 col-xs-9">
                  <p class="form-control-static"> <?php echo $row["id"]; ?> </p>
                </div>
              </div>

              <div class="col-lg-1 col-md-1 col-xs-1">
                <p></p>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-1 col-sm-2 col-xs-2">이름:</label>
                <div class="col-lg-2 col-sm-4 col-xs-9">
                  <p class="form-control-static"> <?php echo $row["name"]; ?> </p>
                </div>
              </div>

              <div class="col-lg-12 col-md-1 col-xs-1">
                <p></p>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-2 col-sm-3 col-xs-2">날짜:</label>
                <div class="col-lg-9 col-sm-8 col-xs-9">
                  <p class="form-control-static"> <?php echo $row["date"]; ?> </p>
                </div>
              </div>

              <div class="col-lg-1 col-md-1 col-xs-1">
                <p></p>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-2 col-sm-3 col-xs-2">이메일:</label>
                <div class="col-lg-5 col-sm-8 col-xs-9">
                  <p class="form-control-static"> <?php echo $row["email"]; ?> </p>
                </div>
              </div>

              <div class="col-lg-1 col-md-1 col-xs-1">
                <p></p>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-1 col-sm-3 col-xs-2">연락처:</label>
                <div class="col-lg-2 col-sm-3 col-xs-9">
                  <p class="form-control-static"> <?php echo "0".$row["pnum"]; ?> </p>
                </div>
              </div>

              <div class="col-lg-1 col-md-1 col-xs-1">
                <p></p>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-12 col-sm-12 col-xs-12">문의 내용:</label>
      					<div class="col-lg-12 col-sm-12 col-xs-12">
      					  <div class="form-group">
      							<textarea class="form-control" rows="15" placeholder="<?php echo $row["comment"];?>" readonly></textarea>
      						</div>
      					</div>
          </div>
  			</div>
		</div>
	</div>
</div>
</div>

<?php include 'footer.php'; ?>
