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

        <form action="./buy1.php" method="get">
          <h4><span class="glyphicon glyphicon-search"></span> Search for</h4>
          <input type="text" class="form-control" name="searchText" placeholder="검색할 매물을 입력하세요">
          <div class="row">
            <div class="col-lg-5">
              <select class="form-control" name=searchColumn>
                <option value="매매" selected>매매</option>
                <option value="전세">전세</option>
                <option value="월세">월세</option>
              </select>
            </div>
            <div class="col-lg-7">
              <select class="form-control" name=searchDong>
                <option value="default">동 이름</option>
                <option value="대치동">대치동</option>
                <option value="역삼동">역삼동</option>
                <option value="가로수길">가로수길</option>
                <option value="방배동">방배동</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <select class="form-control" name=searchType>
                <option value="default">매물 타입</option>
                <option value="원룸">원룸</option>
                <option value="투룸/쓰리룸">투룸/쓰리룸</option>
                <option value="오피스텔/아파트형">오피스텔/아파트형</option>
                <option value="상가/사무실">상가/사무실</option>
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
              <div class="col-lg-4 col-sm-5"><img src="<?php echo $row["imgaddr"];?>" class="ssc_size img-circle" alt="properties"/></div>
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
  /* 검색 시작 */
  if(isset($_GET['searchColumn'])) {
    $searchColumn = $_GET['searchColumn'];
    // $subString .= '&amp;searchColumn=' . $searchColumn;
  }
  if(isset($_GET['searchText'])) {
    $searchText = $_GET['searchText'];
    // $subString .= '&amp;searchText=' . $searchText;
  }
  if(isset($_GET['searchType'])) {
    $searchType = $_GET['searchType'];
    // $subString .= '&amp;searchType=' . $searchType;
  }
  if(isset($_GET['searchDong'])) {
    $searchDong = $_GET['searchDong'];
    // $subString .= '&amp;searchColumn=' . $searchColumn;
  }

  if(isset($searchColumn) && isset($searchText) && isset($searchType) && isset($searchDong) ){
    if($searchType === "default" && $searchDong != "default"){
      if($searchType === "") {
        $searchSql = " where selltype="."\"".$searchColumn."\""." and "."name_Dong= "."\"".$searchDong."\"";
      } else {
        $searchSql = " where name"." like \"%".$searchText."%\""." and "."selltype="."\"".$searchColumn."\""." and "."name_Dong= "."\"".$searchDong."\"";
      }
    }
    else if($searchType === "default" && $searchDong == "default"){
      if($searchType === "") {
        $searchSql = " where selltype="."\"".$searchColumn."\"";
      } else {
        $searchSql = " where name"." like \"%".$searchText."%\""." and "."selltype="."\"".$searchColumn."\"";
      }
    }
    else if($searchType != "default" && $searchDong != "default"){
    $searchSql = " where name"." like \"%".$searchText."%\""." and "."selltype= "."\"".$searchColumn."\""." and "."proptype= "."\"".$searchType."\""." and "."name_Dong= "."\"".$searchDong."\"";
    //조건문 이렇게 col = "str" ㅇㅅㅇ
    }
    else {
      $searchSql = " where name"." like \"%".$searchText."%\""." and "."selltype= "."\"".$searchColumn."\""." and "."proptype= "."\"".$searchType."\"";
    }

    //띄어 쓰기 조심 ㅋ  다 됨ㅎ
    //$searchSql = " where ".$searchColumn." like '%".$searchText."%'";
    //$searchSql = " where " . $searchColumn . " like '%" . $searchText . "%'";
  } else {
    $searchSql = '';
  }
  /* 검색 끝 */

  $sql ="select * from pdata". $searchSql;

  $result = mysqli_query($con,$sql);
  while($row=mysqli_fetch_array($result)){
?>
        <div>
          <!-- properties -->
          <div class="col-lg-4 col-sm-6">
            <div class="properties">
              <div class="image-holder">
                <!--<img src="<?php echo $row['imgaddr'];?>" class="img-responsive" alt="properties">-->

                <img src="<?php echo $row['imgaddr'];?>" alt="properties" height ="150" width ="100%">
                
                <div class="status sold">
                  Sold
                </div>
              </div>
              <h4><?php
              echo "<a href="."property-detail.php?searchP=".$row["id"].">";
              echo $row["name"]?>
              </a></h4>
              <h6> <?php echo $row["proptype"]; ?> </h6>
              <p class="price">
              <?php echo $row["selltype"]?>
              <?php echo $row["price"]?>
              원
              </p>
              <div class="listing-detail">
                <span data-toggle="tooltip" data-placement="bottom" data-original-title="침실"><?php echo $row['numbed'];?>
                </span>
                <span data-toggle="tooltip" data-placement="bottom" data-original-title="거실"><?php echo $row['numliv'];?>
                </span>
                <span data-toggle="tooltip" data-placement="bottom" data-original-title="주방"><?php echo $row['numkit'];?>
                </span>
                <span data-toggle="tooltip" data-placement="bottom" data-original-title="주차장"><?php echo $row['pos_park'];?>
                </span>
              </div>
              <a class="btn btn-primary" href="<?php echo "property-detail.php?searchP=".$row["id"];?>">자세히 보기</a>
            </div>
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
