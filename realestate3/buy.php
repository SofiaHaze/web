<?
  include 'header.php';
  include "db_connect.php";
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

  <div class="search-form"><h4><span class="glyphicon glyphicon-search"></span> Search for</h4>
    <input type="text" class="form-control" placeholder="Search of Properties">
    <div class="row">
			      <div class="col-lg-5">
              <select class="form-control">
                <option>Buy</option>
                <option>Rent</option>
                <option>Sale</option>
              </select>
            </div>
			
            <div class="col-lg-7">
              <select class="form-control">
                <option>가격</option>
                <option>$150,000 - $200,000</option>
                <option>$200,000 - $250,000</option>
                <option>$250,000 - $300,000</option>
                <option>$300,000 - above</option>
              </select>
            </div>
          </div>

          <div class="row">
          <div class="col-lg-12">
              <select class="form-control">
                <option>Property Type</option>
                <option>Apartment</option>
                <option>Building</option>
                <option>Office Space</option>
              </select>
              </div>
          </div>
          <button class="btn btn-primary">Find Now</button>

  </div>



<div class="hot-properties hidden-xs">
<h4>Hot Properties</h4>
<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg" class="img-responsive img-circle" alt="properties"></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                  <p class="price">$300,000</p> </div>
              </div>
</div>
</div>

<div class="col-lg-9 col-sm-8">
<div class="sortby clearfix">
<div class="pull-left result">Showing: 12 of 100 </div>
  
<div class="pull-right">
  <select class="form-control">
  <option>Sort by</option>
  <option>Price: Low to High</option>
  <option>Price: High to Low</option>
  </select>
  </div>
</div>

<div class="row">

<!--디렉토리에 있는 파일과 디렉토리의 갯수 구하기-->
<?
  $dir_result=opendir("images/pp"); //opendir함수를 이용해서 디렉토리의 핸들을 얻어옴
  
  $sql ="select * from pdata";
  $result = mysqli_query($con,$sql);
 
  while($row=mysqli_fetch_array($result)){

?>

     <!-- properties -->
      <div class="col-lg-4 col-sm-6">
      <div class="properties">
        <div class="image-holder">
        <img src="<? echo $row['imgaddr'];?>" class="img-responsive" alt="properties">
        <div class="status sold">Sold</div>
        </div>

        <h4><a href="property-detail.php"><? echo $row["name"]?></a></h4>
        <p class="price"><? echo $row["price"]?>원</p>
        
        <div class="listing-detail">
        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room"><? echo $row['numbed'];?></span> 

        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room"><? echo $row['numliv'];?></span> 

        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen"><? echo $row['numkit'];?></span> 

        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking"><? echo $row['numpark'];?></span> 

        </div>
        
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
      </div>
      </div>
      <!-- properties -->
<?
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