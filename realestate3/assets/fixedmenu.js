// 현재 스크롤바의 위치를 저장하는 변수 (px)
var currentScrollTop = 0;
     
// 비동기식 jQuery이므로 window load 후 jQuery를 실행해야 함
window.onload = function() {
    // 새로고침 했을 경우를 대비한 메소드 실행
    scrollController();
     
    // 스크롤을 하는 경우에만 실행됨
    $(window).on('scroll', function() {
        scrollController();
    });
}
     
// 메인 메뉴의 위치를 제어하는 함수
function scrollController() {
    currentScrollTop = $(window).scrollTop();
    if (currentScrollTop < 150) {
        $('#blog-header-container').css('top', -(currentScrollTop));
        $('#menu-container').css('top', 150-(currentScrollTop));
        if ($('#menu-container').hasClass('fixed')) {
            $('#menu-container').removeClass('fixed');
            $('#menu-container .menu-icon').removeClass('on');
        }
    } else {
        if (!$('#menu-container').hasClass('fixed')) {
            $('#blog-header-container').css('top', -150);
            $('#menu-container').css('top', 0);
            $('#menu-container').addClass('fixed');
            $('#menu-container .menu-icon').addClass('on');
        }
    }
}