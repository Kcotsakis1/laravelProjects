/*
 * Application
 */

$(document).tooltip({
    selector: "[data-toggle=tooltip]"
})

function toggleSidebar() {
    $('#layout-sidebar').toggleClass('in')
}
//jumbotron, parallax effect
var jumboHeight = $('.jumbotron').outerHeight();
function parallax(){
    var scrolled = $(window).scrollTop();
    $('.bg').css('height', (jumboHeight-scrolled) + 'px');
}

$(window).scroll(function(e){
    parallax();
});