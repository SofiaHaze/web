<?php
//$pos = $_SERVER['DOCUMENT_ROOT']."/realestate/";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>광진구 구의동 월드부동산</title>

  <meta charset="UTF-8" />

  <!-- 반응형 -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/style.css"/>
  
  <!--ssc-->
  <link href="assets/ssc.css" type="text/css" rel="stylesheet" />
  <link rel="stylesheet" href="./css/normalize.css" />
  <link rel="stylesheet" href="./css/board.css" />

  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.js"></script>
  <script src="assets/script.js"></script>

<!-- Owl stylesheet -->
<link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
<script src="assets/owl-carousel/owl.carousel.js"></script>
<!-- Owl stylesheet -->


<!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/custom.css" />
    <script type="text/javascript" src="assets/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.slitslider.js"></script>
    <!-- ssc-->
    <script type="text/javascript" src="assets/fixedmenu.js"></script>

<!-- slitslider -->

</head>

<body>

<!-- ssc -->
<div id="fixed-menu">
<!-- Header Starts -->
<div class="navbar-wrapper">

        <div class="navbar-inverse" role="navigation">
          <div class="container">
            <div class="navbar-header">


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- ssc-->
            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right">
               <li class="active"><a href="index.php">홈</a></li>
                <li><a href="about.php">찾아오시는 길</a></li>
                <li><a href="agents.php">월드 공인중개사</a></li>         
                <!--<li><a href="blog.php">블로그</a></li>-->
                <li><a href="contact.php">상담</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>
<!-- #Header Starts -->



<div class="container" >

<!-- Header Starts -->
<div class="header" >
<a href="index.php"><img src="images/logo.png" alt="Realestate"></a>
              <div class="pull-right">
              <?
                session_start();
                if(isset($_SESSION['email'])){
                  $user_email=$_SESSION["email"];
                  echo "안녕하세요. "."$user_email"."님";
                  echo "<a href='logout.php'> 로그아웃</a>";
                }
                else
                  echo "안녕하세요. 고객님";
              ?>
              <ul class="pull-right">
                <li><a href="buy.php">매매</a></li>
                <li><a href="rent.php">전세</a></li>         
                <li><a href="sale.php">월세</a></li>
              </ul>
              </div>
</div>
<!-- #Header Starts -->
</div>
</div>