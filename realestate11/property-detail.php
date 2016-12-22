<?php
  include'header.php';
  include 'db_connect.php';
  $url = $_SERVER['REQUEST_URI'];
?>

<script type="text/javascript">
(function($){

    $(document).ready(function() {

      // jQuery.validator.addMethod("isimg", function(value, element) {
      //                 return this.optional(element) || /()[^\s]+(?=\.(jpg|jpeg|gif|png))\.\2)/.test(value);
      //         }, "사진파일을 첨부해주세요");

    $('#contactid').validate({
            rules: {
                name: { required: true },
                email: {
                  required: true,
                  email: true
                 },
                phone_number: { required: true },
                consult: { required: true }
            },
            messages: {
                name: { required: "이름을 입력하세요" },
                email: {
                  required: "email을 입력하세요",
                  email: "이메일 형식이 아닙니다"
                 },
                phone_number: { required: "폰 번호를 입력하세요" },
                consult: { required: "상담할 내용을 입력하세요" }
            },
            submitHandler: function (frm) {
                frm.submit();
            },
            success: function (e) {
            //
            }
        });
    });
})(jQuery);
</script>

<!-- banner -->
<div class="inside-banner" id="main-content">
  <div class="container">
    <span class="pull-right"><a href="#">Home</a> / Buy</span>
    <h2>Buy</h2>
</div>
</div>
<!-- banner -->

<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 hidden-xs">

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
      <p class="">
  </div><?php } ?>
</div>



<!-- <div class="advertisement">
  <h4>Advertisements</h4>
  <img src="images/advertisements.jpg" class="img-responsive" alt="advertisement">

</div> -->

</div>


<!-- 검색 -->
<?php
  /* 검색 시작 */
  if(isset($_GET['searchP'])) {
    $searchP = $_GET['searchP'];
  }
  if(isset($searchP)) {
      $searchSql = " where id="."\"".$searchP."\"";
  } else {
    $searchSql = '';
  }
  /* 검색 끝 */

  $sql ="select * from pdata". $searchSql;

  $result = mysqli_query($con,$sql);
  $row=mysqli_fetch_array($result);
?>
<!-- 검색 -->


<div class="col-lg-9 col-sm-8 ">

<h2><?php echo $row["name"]?></h2>
<div class="row">
  <div class="col-lg-8">
  <div class="property-images">
    <!-- Slider Starts -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <!-- <ol class="carousel-indicators hidden-xs">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
      </ol> -->
      <div class="carousel-inner">
        <!-- Item 1 -->
        <div class="item active">
          <img src="<?php echo $row['imgaddr'];?>" class="properties" alt="properties" />
        </div>
        <!-- #Item 1 -->

        <!-- Item 2 -->
        <!-- <div class="item">
          <img src="images/properties/2.jpg" class="properties" alt="properties" />
        </div> -->
        <!-- #Item 2 -->

        <!-- Item 3 -->
         <!-- <div class="item">
          <img src="images/properties/1.jpg" class="properties" alt="properties" />
        </div> -->
        <!-- #Item 3 -->

        <!-- Item 4 -->
        <!-- <div class="item ">
          <img src="images/properties/3.jpg" class="properties" alt="properties" />
        </div> -->
        <!-- # Item 4 -->
      </div>
      <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a> -->
    </div>
<!-- #Slider Ends -->

  </div>


  <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span> 상세설명</h4>
    <?php echo $row["comment"] ?>

  </div>
  <div><h4><span class="glyphicon glyphicon-map-marker"></span> 위치</h4>
<div class="well"><iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" <?php
  $addrs = str_replace(" ", "", $row["address"]);
  echo "src=https://www.google.co.kr/maps?f=q&amp;source=s_q&amp;hl=ko&amp;geocode=&amp;q=".$addrs."&amp;aq=0&amp;output=embed";?>></iframe></div>

  </div>

  </div>
  <div class="col-lg-4">
  <div class="col-lg-12  col-sm-6">
<div class="property-info">
  <p class="price"> <?php echo $row["proptype"]."<br><br>".$row["selltype"]; ?> </p>
<p class="price"><?php echo $row["price"];?>원</p>
  <p class="area"><span class="glyphicon glyphicon-map-marker"></span> <?php echo $row["address"]; ?></p>

  <div class="profile">
  <span class="glyphicon glyphicon-user"></span> 상담사
  <p>이용자<br>02-454-3002</p>
  </div>
</div>

    <h6><span class="glyphicon glyphicon-home"></span> Availabilty</h6>
    <div class="listing-detail">
      <span data-toggle="tooltip" data-placement="bottom" data-original-title="침실">
        <?php echo $row["numbed"]; ?>
      </span>
      <span data-toggle="tooltip" data-placement="bottom" data-original-title="거실">
        <?php echo $row["numliv"]; ?>
      </span>
      <span data-toggle="tooltip" data-placement="bottom" data-original-title="주방">
        <?php echo $row["numkit"]; ?>
      </span>
      <span data-toggle="tooltip" data-placement="bottom" data-original-title="주차장">
        <?php echo $row["pos_park"]; ?>
      </span>
    </div>

</div>
<div class="col-lg-12 col-sm-6 ">
<div class="enquiry">
  <h6><span class="glyphicon glyphicon-envelope"></span> 문의하기</h6>
    <form method ="post" action="contact_update.php" enctype="multipart/form-data" id="contactid" role="form">
                <input type="text" class="form-control" name="name" id="name" placeholder="성함"/>
                <input type="text" class="form-control" name="email" id="email" placeholder="이메일"/>
                <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="핸드폰번호"/>
                <textarea rows="6" class="form-control" name="consult" id="consult" placeholder="문의내용 (어떤 매물인지 적어주세요)"></textarea>
      <button type="submit" class="btn btn-primary" name="Submit" value="<?php echo $url;?>">문의 보내기</button>
    </form>
 </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<?php include'footer.php';?>
