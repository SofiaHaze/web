<?php
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
                  <option value="sell">매매</option>
                  <option value="rent">전세</option>
                  <option value="rentm">월세</option>
                </select>
              </div>
              <div class="col-lg-3 col-sm-4">
                <select class="form-control" name=searchType>
                  <option value="all">매물 타입</option>
                  <option value="r1">원룸</option>
                  <option value="r23">투룸/쓰리룸</option>
                  <option value="offi">오피스텔/아파트형</option>
                  <option value="arca">상가/사무실</option>
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
<!-- banner -->
<div class="container">
  <div class="properties-listing spacer">
    <a href="buysalerent.php" class="pull-right viewall">매물 전체보기</a>
    <h2>오늘의 매물</h2>
    <div id="owl-example" class="owl-carousel">
      <div class="properties">
        <div class="image-holder">
          <img src="images/properties/1.jpg" class="img-responsive" alt="properties"/>
          <div class="status sold">
            Sold
          </div>
        </div>
        <h4><a href="property-detail.php">롯데 캐슬 22F</a></h4>
        <p class="price">
          가격: 234,900원
        </p>
        <a class="btn btn-primary" href="property-detail.php">상세정보 보기</a>
      </div>
      <div class="properties">
        <div class="image-holder">
          <img src="images/properties/2.jpg" class="img-responsive" alt="properties"/>
          <div class="status new">
            New
          </div>
        </div>
        <h4><a href="property-detail.php">삼성 프리미엄 아파트 A동</a></h4>
        <p class="price">
          가격: 244,900원
        </p>
        <a class="btn btn-primary" href="property-detail.php">상세정보 보기</a>
      </div>
      <div class="properties">
        <div class="image-holder">
          <img src="images/properties/3.jpg" class="img-responsive" alt="properties"/>
        </div>
        <h4><a href="property-detail.php">항공대 전자관 건물</a></h4>
        <p class="price">
          가격: 1234,200원
        </p>
        <a class="btn btn-primary" href="property-detail.php">상세정보 보기</a>
      </div>
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
            <div class="item active">
              <div class="row">
                <div class="col-lg-4">
                  <img src="images/properties/1.jpg" class="img-responsive" alt="properties"/>
                </div>
                <div class="col-lg-8">
                  <h5><a href="property-detail.php">푸르지오 3차아파트 분양</a></h5>
                  <p class="price">
                    400,000원
                  </p>
                  <a href="property-detail.php" class="more">상세정보 보기</a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-lg-4">
                  <img src="images/properties/2.jpg" class="img-responsive" alt="properties"/>
                </div>
                <div class="col-lg-8">
                  <h5><a href="property-detail.php">파주 힐스테이트 A동 1504호</a></h5>
                  <p class="price">
                    2,300,000원
                  </p>
                  <a href="property-detail.php" class="more">상세정보 보기</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include'footer.php';?>