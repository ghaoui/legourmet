(function($){	
$(document).ready(function(){

 
 var offset = 220;
    var duration = 500;
    $(window).scroll(function() {
        if ($(this).scrollTop() > offset) {
            $('.back-top').fadeIn(duration);
        } else {
            $('.back-top').fadeOut(duration);
        }
    });
    $('.back-top').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, duration);
        return false;
    });
    
    /*$('.propos .title-propos li a').click(function(e){
        e.preventDefault();
        var id = $(this).data('id');
        $('.item-content > div').each(function(i, elem){
            console.log($(elem));
            $(elem).removeClass('isActive');
        });
        $('.item-content .content-'+id).addClass('isActive');
    });*/
    
    
    /*$('.item-content').delegate('.isActive','mouseenter mouseleave', function(event) {
        if(event.type === 'mouseenter'){
           $(this).addClass('hoverNow'); 
        }else{
           $(this).removeClass('hoverNow');
        }
    });*/


// scroll smooth pour menu
    $('#homemenu .menu a[href^="#"], #xsmenu .menu a[href^="#"]').click(function(){
            var the_id = $(this).attr("href");
            $('html, body').animate({
                    scrollTop: ($(the_id).offset().top - 120)
            }, 1200);
            return false;
    });
    
    $("#map").on('inview.uk.scrollspy', function(){
        marker1.setAnimation(google.maps.Animation.DROP);
        marker2.setAnimation(google.maps.Animation.DROP);
        marker3.setAnimation(google.maps.Animation.DROP);
     });
     
     // add the animation to the modal
$(".modal").each(function(index) {
    
  $(this).on('show.bs.modal', function(e) {
    var open = $(this).attr('data-easein');
    
    if (open == 'shake') {
      $('.modal-dialog').velocity('callout.' + open); 
    } else if (open == 'pulse') {
      $('.modal-dialog').velocity('callout.' + open);
    } else if (open == 'tada') {
      $('.modal-dialog').velocity('callout.' + open);
    } else if (open == 'flash') {
      $('.modal-dialog').velocity('callout.' + open);
    } else if (open == 'bounce') {
      $('.modal-dialog').velocity('callout.' + open);
    } else if (open == 'swing') {
      $('.modal-dialog').velocity('callout.' + open);
    } else {
      $('.modal-dialog').velocity('transition.' + open);
    }

  });
});
$('.closeLeft').click(function(){
    var modal = $(this).parents('.modal');
    $(modal).find('.modal-dialog').velocity({
    translateZ: 0, // Force HA by animating a 3D property
    translateX: "1600px",
}, {
    /* Log all the animated divs. */
    complete: function(elements) { $(modal).modal('hide');}
});
    
});
$('.closeRight').click(function(){
    var modal = $(this).parents('.modal');
    $(modal).find('.modal-dialog').velocity({
    translateZ: 0, // Force HA by animating a 3D property
    translateX: "-1600px",
}, {
    /* Log all the animated divs. */
    complete: function(elements) { $(modal).modal('hide');}
});
    
});

//$('.formulaire').parallax("50%", -0.1);
}); 

})(jQuery);
var marker1, marker2, marker3, info1, info2, info3;
function initMap() { 
    
    var mapDiv = document.getElementById('map');
    var map = new google.maps.Map(mapDiv, {
        center: {lat: 36.895043, lng: 10.309322},
        zoom: 10,
        disableDefaultUI: true
    });
    
    //var image = 'http://dealtounsi.com/wp-content/themes/wpsite/images/marker.png';
    marker1 = new google.maps.Marker({
      position: {lat: 36.879761, lng: 10.333916},
      map: map,
      //icon: image,
      animation: google.maps.Animation.DROP
    });
    marker2 = new google.maps.Marker({
      position: {lat: 36.848736, lng: 10.180422},
      map: map,
      //icon: image,
      animation: google.maps.Animation.DROP
    });
    marker3 = new google.maps.Marker({
      position: {lat: 36.775130, lng: 10.231836},
      map: map,
      //icon: image,
      animation: google.maps.Animation.DROP
    });
    
    info1 = new google.maps.InfoWindow({
        content: "La Marsa : 2 Rue El Maârri, 2070 La Marsa<br>du Lun au Ju 05h30 à 21h00<br>du Ven au Dim jusqu'à 22h00<br>71 742 607 | 21 024 024"
      });
    info2 = new google.maps.InfoWindow({
        content: "El Menzah :Boutique 3, Rue Tarak Ibn Zied, 2091 El Menzah V<br>du Lun au Ju 06h00 à 21h00<br>du Ven au Dim jusqu'à 22h00<br>71 752 664 | 27 252 252"
      });
    info3 = new google.maps.InfoWindow({
        content: "Mégrine : 3 Résidence Omar, Av. H. Bourguiba, 2033 Mégrine<br>du Lun au Ju 06h00 à 21h00<br>du Ven au Dim jusqu'à 22h00<br>29 287 287"
      });
      
      marker1.addListener('click', function() {
        info1.open(map, marker1);
        info2.close();
        info3.close();
      });
      marker3.addListener('click', function() {
        info3.open(map, marker3);
        info2.close();
        info1.close();
      });
      marker2.addListener('click', function() {
        info2.open(map, marker2);
        info1.close();
        info3.close();
      });
}