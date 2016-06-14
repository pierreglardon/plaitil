
function logoSize() {
    if ($(window).scrollTop() >= 70) {
        $('#header').addClass('mini');
    } else {
        $('#header').removeClass('mini');
    }
}

logoSize();
$(window).scroll(function() {
    logoSize();
});

function menuToggle() {
    $('#navigation').toggleClass('openMenu');
    $('body').toggleClass('openMenu');
}

$('#navigation section a').click(function(){
    menuToggle();
});

$(window).ready(function(){
    $('.container').css('margin-top',$('#header a').height());
});

$('.owl-home-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    autoplay:true,
    autoplaySpeed: 1500,
    items:1
});
