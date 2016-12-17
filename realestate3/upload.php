<?php include 'header.php'; ?>

 <!-- form validation 위한 js코드 -->
<script type="text/javascript">
(function($){

    $(document).ready(function() {

      // jQuery.validator.addMethod("isimg", function(value, element) {
      //                 return this.optional(element) || /()[^\s]+(?=\.(jpg|jpeg|gif|png))\.\2)/.test(value);
      //         }, "사진파일을 첨부해주세요");

    $('#uploadid').validate({
            rules: {
                p_name: { required: true },
                price: { required: true },
                size: { required: true },
                num_liv: { required: true },
                num_bed: { required: true },
                num_kit: { required: true },
                addr: { required: true },
                comment: { required: true },
                // imagename: { isimg: true },
            },
            messages: {
                p_name: { required: "이름을 입력하세요" },
                price: { required: "가격을 입력하세요" },
                size: { required: "크기를 입력하세요" },
                num_liv: { required: "거실의 갯수를 입력하세요" },
                num_bed: { required: "침실의 갯수를 입력하세요" },
                num_kit: { required: "부엌의 갯수를 입력하세요" },
                addr: { required: "주소를 입력하세요" },
                comment: { required: "설명을 입력하세요" },
                // imagename: { isimg: "사진파일을 첨부해주세요"},
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
    <span class="pull-right"><a href="index.php">홈</a> / 매물등록</span>
    <h2>매물등록</h2>
	</div>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">
  <div class="row">
	<div class="col-lg-3 col-sm-4 ">
  		<div class="search-form">
        <h4><span class="glyphicon glyphicon-search"></span> Search for</h4>
  			<input type="text" class="form-control" placeholder="매물 검색">
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
  						<option>매물 종류</option>
  						<option>원룸</option>
  						<option>투룸/쓰리룸</option>
  						<option>오피스텔/아파트형</option>
  						<option>상가/사무실</option>
  					</select>
  				</div>
  			</div>
  		<button class="btn btn-primary">검색</button>
  		</div>
  	</div>

  	<div class="col-lg-9 col-sm-8">
  		<div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12">
          <h4>매물등록</h4>
        </div>
        <?php
        	if(!isset($_SESSION['email'])) {
        		$msg = "관리자 로그인이 필요합니다";
        		echo "<script type='text/javascript'>alert('$msg');</script>";
        		echo "<meta http-equiv='refresh' content='0.3; url=index.php'>";
        	}
        ?>
		     	<!--
		     	매물등록 폼. 들어가야할 내용
		     	이름, (매매, 전세, 월세), 매물종류, 가격, 크기, 방 개수(침실 거실 주방), 주소, 사진, 간단한 설명
		     	-->
		     	<div>
        	  <form action="uploading.php" method="post" enctype="multipart/form-data" id="uploadid">

              <div class="col-lg-12 col-sm-12 col-xs-12">
                <input type="text" class="form-control" name="p_name" id="p_name" placeholder="매물 명 입력"/>
              </div>

              <div class="col-lg-3 col-sm-5 col-xs-12">
  							<select class="form-control" name="p_sell_type" id="p_sell_type">
  								<option value="sell" selected="selected">매매</option>
  								<option value="rent">전세</option>
  								<option value="rentm">월세</option>
  							</select>
  						</div>

  						<div class="col-lg-4 col-sm-7 col-xs-12">
  							<select class="form-control" name="p_type" id="p_type">
  								<option value="r1" selected="seleted">원룸</option>
  								<option value="r23">투룸/쓰리룸</option>
  								<option value="offi">오피스텔/아파트형</option>
  								<option value="arca">상가/사무실</option>
  							</select>
  						</div>

              <div class="col-lg-5 col-sm-6 col-xs-6">
                <input type="text" class="form-control" name="price" id="price" placeholder="가격 (원)"/>
              </div>

              <div class="col-lg-3 col-sm-6 col-xs-6">
                <input type="text" class="form-control" name="size" id="size" placeholder="크기 (평방미터)"/>
              </div>

              <div class="col-lg-3 col-sm-4 col-xs-4">
                <input type="text" class="form-control" name="num_liv" id="num_liv" placeholder="거실 수 입력"/>
              </div>

              <div class="col-lg-3 col-sm-4 col-xs-4">
                <input type="text" class="form-control" name="num_bed" id="num_bed" placeholder="침실 수 입력"/>
              </div>

              <div class="col-lg-3 col-sm-4 col-xs-4">
                <input type="text" class="form-control" name="num_kit" id="num_kit" placeholder="주방 수 입력"/>
              </div>

              <div class="col-lg-12 col-sm-12 col-xs-12">
                <input type="text" class="form-control" name="addr" id="addr"  placeholder="주소 입력"/>
              </div>

  					  <div class="col-lg-12 col-sm-12 col-xs-12">
         		    <div class="input-group">
                 <label class="input-group-btn">
                      <span class="btn btn-default">
                          찾아보기&hellip; <input type="file" style="display: none;" name="image" multiple>
                      </span>
                  </label>
                  <input type="text" class="form-control" placeholder="사진파일 업로드" id="imagename" readonly>
              	</div>
              </div>

    					<div class="col-lg-12 col-sm-12 col-xs-12">
    					  <div class="form-group">
    						  <lable> <br> </label>
    							<textarea class="form-control" rows="5" name="comment" id="comment" placeholder="간단한 설명 입력"></textarea>
    						</div>
    					</div>

    					<div class="col-lg-12 col-sm-12 col-xs-12">
                <input type="submit" name="submit" id="submit" class="btn btn-primary" value="등록" />
              </div>
            </form>
          </div>
  			</div>
		</div>
	</div>
</div>
</div>

<?php include 'footer.php'; ?>
