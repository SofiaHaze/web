<?php
  require_once("db_connect.php");
  include "header.php";
?>

<!-- banner -->
<div class="inside-banner" id="main-content">
  <div class="container">
    <span class="pull-right"><a href="index.php">Home</a> / 매매</span>
    <h2>매매</h2>
  </div>
</div>
<!-- banner -->
<div class="container">
  <div class="properties-listing spacer">
    <div class="row">
      <div class="col-lg-3 col-sm-4 ">
        <div class="search-form">

        <form action="./buy.php" method="get">

          <h4><span class="glyphicon glyphicon-search"></span> Search for</h4>
          <input type="text" class="form-control" name="searchText" placeholder="검색할 매물을 입력하세요">
          <div class="row">
            <div class="col-lg-5">
              <select class="form-control" name=searchColumn>
                <option value="sell" selected>매매</option>
                <option value="rent">전세</option>
                <option value="rentm">월세</option>
              </select>
            </div>
            <div class="col-lg-7">
              <select class="form-control">
                <option>위치</option>
                <option>대치동</option>
                <option>역삼동</option>
                <option>가로수길</option>
                <option>방배동</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <select class="form-control" name=searchType>
                <option value="all">매물 타입</option>
                <option value="r1">원룸</option>
                <option value="r23">투룸/쓰리룸</option>
                <option value="offi">오피스텔/아파트형</option>
                <option value="arca">상가/사무실</option>
              </select>
            </div>
          </div>
          <button class="btn btn-primary" type="submit">검색</button>

        </form>

        </div>
        <div class="hot-properties hidden-xs">
          <h4>추천매물</h4>
          <?php

            $sql ="select * from pdata where hotp=1";

            $result = mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($result)){
          ?>
            <div class="row">
              <div class="col-lg-4 col-sm-5"><img src="<?php echo $row["imgaddr"];?>" class="img-responsive img-circle" alt="properties"/></div>
              <div class="col-lg-8 col-sm-7">
                <h5>
                <?php
                echo "<a href="."property-detail.php?searchP=".$row["id"].">";
                echo $row["name"];?></a></h5>
                <h6> <?php echo $row["proptype"]." ".$row["selltype"]; ?> </h6>
                <p class="price"><?php echo $row["price"];?>원</p> </div>
            </div><?php } ?>
        </div>
      </div>
      <div class="col-lg-9 col-sm-8">
        <div class="sortby clearfix">
          <div class="pull-left result">
            Showing: 12 of 100
          </div>
          <div class="pull-right">
            <select class="form-control">
              <option>정렬하기</option>
              <option>낮은 가격순으로</option>
              <option>높은 가격순으로</option>
            </select>
          </div>
        </div>
        <div class="row">

<!--디비에 있는 내용 화면에 뿌려주기 & 검색 ! ㅋ-->
<?php
  $sql ="select * from pdata";

  $result = mysqli_query($con,$sql);
  while($row=mysqli_fetch_array($result)){
?>
          <!-- properties -->
          <div class="col-lg-4 col-sm-6">
            <div class="properties">
              <div class="image-holder">
                <img src="<?php echo $row['imgaddr'];?>" class="img-responsive" alt="properties">
                <div class="status sold">
                  Sold
                </div>
              </div>
              <h4><?php
              echo "<a href="."property-detail.php?searchP=".$row["id"].">";
              echo $row["name"]
              ?>
              </a></h4>
              <h6> <?php echo $row["proptype"]; ?> </h6>
              <p class="price">
              <?php echo $row["selltype"]?>
              <?php echo $row["price"]?>
              원
              </p>
              <div class="listing-detail">
                <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room"><?php echo $row['numbed'];?>
                </span>
                <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room"><?php echo $row['numliv'];?>
                </span>
                <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen"><?php echo $row['numkit'];?>
                </span>
                <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking"><?php echo $row['pos_park'];?>
                </span>
              </div>
              <a class="btn btn-primary" href="property-detail.php">자세히 보기</a>
            </div>
          </div>
          <!-- properties -->
          <?php
  }
?>
          <div class="center">
            <ul class="pagination">
              <li><a href="#">¡ì</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">¡í</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include'footer.php';?>
