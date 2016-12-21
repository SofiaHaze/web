<?
  include'header.php';
  require_once("db_connect.php");
?>

<div class="" id="main-content">
  <div id="slider" class="sl-slider-wrapper">
    <div class="sl-slider">
      <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
        <div class="sl-slide-inner">
          <div class="bg-img bg-img-1">
          </div>
          <h2><a href="#">저희 월드 부동산에 오신 것을 환영합니다.</a></h2>
          <blockquote>
            <p class="location">
              <span class="glyphicon glyphicon-map-marker"></span> 서울 광진구 자양로50길 9 (지번)구의동 31-17
            </p>
            <p>
              최선을 다해 정성껏 모시겠습니다.
            </p>

            <button class="btn btn-info" onclick="goToConsult()" data-target="#loginpop">상담 환영</button>
          
          </blockquote>
        </div>
      </div>
      <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
        <div class="sl-slide-inner">
          <div class="bg-img bg-img-2">
          </div>
          <h2><a href="#">저희 월드 부동산에 오신 것을 환영합니다.</a></h2>
          <blockquote>
            <p class="location">
              <span class="glyphicon glyphicon-map-marker"></span> 서울 광진구 자양로50길 9 (지번)구의동 31-17
            </p>
            <p>
              최선을 다해 정성껏 모시겠습니다.
            </p>
            <button class="btn btn-info" onclick="goToConsult()" data-target="#loginpop">상담 환영</button>
            
          </blockquote>
        </div>
      </div>
      <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
        <div class="sl-slide-inner">
          <div class="bg-img bg-img-3">
          </div>
          <h2><a href="#">언제나 믿음으로 보답하겠습니다.</a></h2>
          <blockquote>
            <p class="location">
              <span class="glyphicon glyphicon-map-marker"></span> 서울 광진구 자양로50길 9 (지번)구의동 31-17
            </p>
            <p>
              최선을 다해 정성껏 모시겠습니다.
            </p>
            <button class="btn btn-info" onclick="goToConsult()" data-target="#loginpop">상담 환영</button>
          </blockquote>
        </div>
      </div>
      <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
        <div class="sl-slide-inner">
          <div class="bg-img bg-img-4">
          </div>
          <h2><a href="#">저희 월드 부동산에 오신 것을 환영합니다.</a></h2>
          <blockquote>
            <p class="location">
              <span class="glyphicon glyphicon-map-marker"></span> 서울 광진구 자양로50길 9 (지번)구의동 31-17
            </p>
            <p>
              최선을 다해 정성껏 모시겠습니다.
            </p>
            <button class="btn btn-info" onclick="goToConsult()" data-target="#loginpop">상담 환영</button>
          </blockquote>
        </div>
      </div>
      <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
        <div class="sl-slide-inner">
          <div class="bg-img bg-img-5">
          </div>
          <h2><a href="#">저희 월드 부동산에 오신 것을 환영합니다.</a></h2>
          <blockquote>
            <p class="location">
              <span class="glyphicon glyphicon-map-marker"></span> 서울 광진구 자양로50길 9 (지번)구의동 31-17
            </p>
            <p>
              최선을 다해 정성껏 모시겠습니다.
            </p>
            <button class="btn btn-info" onclick="goToConsult()" data-target="#loginpop">상담 환영</button>
          </blockquote>
        </div>
      </div>
    </div>
    <!-- /sl-slider -->
    <nav id="nav-dots" class="nav-dots">
    <span class="nav-dot-current"></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    </nav>
  </div>

  
  <!-- /slider-wrapper -->
</div>
<div class="banner-search">
  <div class="container">
    <!-- banner -->
    <h3>매매, 전세 & 월세</h3>
    <div class="searchbar">
      <div class="row">
      
        <form action="./buy.php" method="get">
          <div class="col-lg-6 col-sm-6">
            <input type="text" class="form-control" placeholder="매물 검색하기" name="searchText" value="<?php echo isset($searchtext)?$searchtext:null?>">
            <div class="row">
              <div class="col-lg-3 col-sm-3 ">
                <select class="form-control" name=searchColumn>
                  <option value="매매">매매</option>
                  <option value="전세">전세</option>
                  <option value="월세">월세</option>
                </select>
              </div>
              <div class="col-lg-3 col-sm-4">
                <select class="form-control" name=searchType>
                  <option value="all">매물 타입</option>
                  <option value="원룸">원룸</option>
                  <option value="투룸/쓰리룸">투룸/쓰리룸</option>
                  <option value="오피스텔/아파트형">오피스텔/아파트형</option>
                  <option value="상가/사무실">상가/사무실</option>
                </select>
              </div>
              <div class="col-lg-3 col-sm-4">
                <button class="btn btn-success" type="submit">검색</button>
              </div>
            </div>
          </div>
        </form>

        <div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
          <p>
            회원가입을 원할 시 로그인 버튼을 클릭해주세요
          </p>
          <button class="btn btn-info" data-toggle="modal" data-target="#loginpop">로그인</button>
          <button class="btn btn-info" onclick="window.location.href='review.php'" data-target="#loginpop">이용 후기</button>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- banner Today's properties -->
<div class="container">
  <div class="properties-listing spacer">
    <a href="buysalerent.php" class="pull-right viewall">매물 전체보기</a>
    <h2>오늘의 매물</h2>
    <div id="owl-example" class="owl-carousel">

<?php
$sql = "select * from pdata where registered_time <= '2016-12-23' and registered_time >= '2016-11-23' order by rand() limit 30";
$result = $con->query($sql);
//$row = $result-> fetch_assoc();

$i = 0;
while($row=$result->fetch_assoc()){
?>      
      <div class="properties">
              <div class="image-holder">
                <img src="<? echo $row['imgaddr'];?>" class="img-responsive" alt="properties">
                
                <?php
                  if($row['registered_time']){ 
                ?>
                <div class="status sold">
                  Sold
                </div>
                <?php
                }else {
                ?>
                <div class="status new">
                  New
                </div>
                <?php
                }
                ?>


              </div>
              <h4><a href="property-detail.php"><? echo $row["name"]?>
              </a></h4>
              <p class="price">
              <?echo $row["selltype"]?>
              <? echo $row["price"]?>
              원
              </p>
              <div class="listing-detail">
                <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room"><? echo $row['numbed'];?>
                </span>
                <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room"><? echo $row['numliv'];?>
                </span>
                <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen"><? echo $row['numkit'];?>
                </span>
                <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking"><? echo $row['pos_park'];?>
                </span>
              </div>
              <a class="btn btn-primary" href="property-detail.php">자세히 보기</a>
            </div>
<?php

}
?>       

    </div>
  </div>

  <div class="spacer">
    <div class="row">
      <div class="col-lg-6 col-sm-9 recent-view">
        <h3>문의하기</h3>
        <p>
          상담을 원하시면 밑에 버튼을 클릭하세요.<br>
          <a href="about.php">상담</a>
        </p>
      </div>
      <div class="col-lg-5 col-lg-offset-1 col-sm-3 recommended">
        <h3>추천 매물</h3>
        <div id="myCarousel" class="carousel slide">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
          </ol>
          <!-- Carousel items -->
          <div class="carousel-inner">

                      <?php

  $sql ="select * from pdata where hotp=1";

  $result = mysqli_query($con,$sql);
  while($row=mysqli_fetch_array($result)){
?>
            <div class="item active">


              <div class="row">
                <div class="col-lg-4">
                  <img src="<?php echo $row["imgaddr"];?>" class="img-responsive img-circle" alt="properties"/>
                </div>
                <div class="col-lg-8">
                  <h5><?php
      echo "<a href="."property-detail.php?searchP=".$row["id"].">";
      echo $row["name"];?></a></h5>
                  <h6> <?php echo $row["proptype"]." ".$row["selltype"]; ?> </h6>
      <p class="price"><?php echo $row["price"];?>원</p> </div>
                  <a href="property-detail.php" class="more">상세정보 보기</a>
                  </div><?php } ?>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include'footer.php';?>