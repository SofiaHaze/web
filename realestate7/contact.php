<?php include'header.php';?>

 <!-- form validation 위한 js코드 -->
<script type="text/javascript">
(function($){

    $(document).ready(function() {

      // jQuery.validator.addMethod("isimg", function(value, element) {
      //                 return this.optional(element) || /()[^\s]+(?=\.(jpg|jpeg|gif|png))\.\2)/.test(value);
      //         }, "사진파일을 첨부해주세요");

    $('#contactid').validate({
            rules: {
                name: { required: true },
                email: { required: true },
                phone_number: { required: true },
                consult: { required: true }
            },
            messages: {
                name: { required: "이름을 입력하세요" },
                email: { required: "email을 입력하세요" },
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
		<!--kcs-->
		<span class="pull-right"><a href="#">홈</a> / 상담</span>
		<h2>문의하기</h2>
		<!--kcs-->
	</div>
</div>
<!-- banner -->
<div class="container">
	<div class="spacer">
		<div class="row contact">
			<div class="col-lg-6 col-sm-6 ">
			
			<form method ="post" action="contact_update.php" enctype="multipart/form-data" id="contactid">
			
				<div class="col-lg-12 col-sm-12 col-xs-12">
                <input type="text" class="form-control" name="name" placeholder="성함"/>
             	</div>

             	<div class="col-lg-12 col-sm-12 col-xs-12">
				<input type="text" class="form-control" name="email" placeholder="이메일">
				</div>

				<div class="col-lg-12 col-sm-12 col-xs-12">
				<input type="text" class="form-control" name="phone_number" placeholder="연락처">
				</div>

				<div class="col-lg-12 col-sm-12 col-xs-12">
				<textarea rows="6" class="form-control" name="consult" placeholder="상담 내용"></textarea>
				</div>
				
				<button type="submit" class="btn btn-success" name="Submit">상담 문의 남기기</button>
			</form>


			</div>
			<div class="col-lg-6 col-sm-6 ">
				<div class="well">

<iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBXNXSAsfXJ0fl4YbYuWqB0aAL5jQ0AwJY
    &q=31-17+Gueui-dong,+Gwangjin-gu,+Seoul,+South+Korea" allowfullscreen>
</iframe>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include'footer.php';?>

