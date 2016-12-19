<!--ssc -->
<!--
function email_chk(){
  var stremail = document.form.email;
  var stremail2 = document.form.email2;
  var mail = stremail.value + "@" + stremail2.value;
  var t = escape(mail);
  if(t.match(/^(\w+)@(\w+)[.](\w+)$/ig) == null && t.match(/^(\w+)@(\w+)[.](\w+)[.](\w+)$/ig) == null){
    alert("이메일을 올바르게 입력해 주세요.");
    document.form.email.focus();
    return;
  } else {
    alert("올바른 이메일입니다.");
    return;
  }
}
-->

function goToConsult(){
  var url = "contact.php";    
  //alert("상담 페이지로 이동합니다.");
  $(location).attr('href',url);
}


function submitForm(sub){
  document.forms[sub].submit();
}

function proceedSubmission(){

  return confirm("이 내용을 메일로 전송하려면 확인 버튼을 클릭하세요!");
}





  $(document).ready(function() {
   $("#owl-example").owlCarousel();
  $('.listing-detail span').tooltip('hide');
        $('.carousel').carousel({
            interval: 3000
        }); 
        $('.carousel').carousel('cycle');
 }); 




  $(function() {
      
        var Page = (function() {

          
          var $nav = $( '#nav-dots > span' ),
            slitslider = $( '#slider' ).slitslider( {
              onBeforeChange : function( slide, pos ) {

                $nav.removeClass( 'nav-dot-current' );
                $nav.eq( pos ).addClass( 'nav-dot-current' );

              }
            } ),

            init = function() {

              initEvents();
              
            },
            initEvents = function() {

              $nav.each( function( i ) {
              
                $( this ).on( 'click', function( event ) {
                  
                  var $dot = $( this );
                  
                  if( !slitslider.isActive() ) {

                    $nav.removeClass( 'nav-dot-current' );
                    $dot.addClass( 'nav-dot-current' );
                  
                  }
                  
                  slitslider.jump( i + 1 );
                  return false;
                
                } );
                
              } );

            };

            return { init : init };

        })();

        Page.init();

        /**
         * Notes: 
         * 
         * example how to add items:
         */

        /*
        
        var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');
        
        // call the plugin's add method
        ss.add($items);

        */
      
      });