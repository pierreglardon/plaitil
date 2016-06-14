
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

// google map
google.maps.event.addDomListener(window, 'load', init);
function init() {
    var mapOptions = {
        zoom: 16,
        center: new google.maps.LatLng(43.300000, 5.400000), // MARSEILLE ( ﾟヮﾟ)
        styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"off"}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#c9323b"}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#c9323b"},{"weight":1.2}]},{"featureType":"administrative.locality","elementType":"geometry.fill","stylers":[{"lightness":"-1"}]},{"featureType":"administrative.neighborhood","elementType":"labels.text.fill","stylers":[{"lightness":"0"},{"saturation":"0"}]},{"featureType":"administrative.neighborhood","elementType":"labels.text.stroke","stylers":[{"weight":"0.01"}]},{"featureType":"administrative.land_parcel","elementType":"labels.text.stroke","stylers":[{"weight":"0.01"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#c9323b"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#99282f"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#99282f"}]},{"featureType":"road.highway.controlled_access","elementType":"geometry.stroke","stylers":[{"color":"#99282f"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#99282f"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#99282f"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#99282f"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#090228"}]}]
    };
    var mapElement = document.getElementById('map');
    var map = new google.maps.Map(mapElement, mapOptions);
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(43.300000, 5.400000),
        map: map,
        title: 'Snazzy!'
    });
}
