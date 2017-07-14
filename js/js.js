function initialize() {
	var mapOptions = {//-29.1677403,-51.1767765
	  zoom: 16,
	  center: new google.maps.LatLng(-29.16774033982065, -51.17677646343897),
	  mapTypeId: google.maps.MapTypeId.ROADMAP,
	  scrollwheel: false
	}
	var map = new google.maps.Map(document.getElementById('map_canvas'),
	                              mapOptions);

	
	var myLatLng = new google.maps.LatLng(-29.16774033982065, -51.17677646343897);
	var beachMarker = new google.maps.Marker({
	    position: myLatLng,
	    map: map,
	    icon: 'style/img/icon-map.png'
	    
	});
}


$("document").ready(function(){
    initialize();

    $('.img').click(function() {
		var height_bg = $(window).height();
		$("html, body").animate({ scrollTop: $(".title_contact").offset().top }, 600);
	});


    var height_bg = $(window).height();
    $(".bg_top").css({"height": height_bg});
    console.log();
    if(height_bg > 830){
    	$(".works").css({"height": 832});
    }else{
    	$(".works").css({"height": height_bg});
    }
    //title_contact

    $('.down, .arrow_down').click(function(){
    	$("html, body").animate({ scrollTop: $(".works").offset().top }, 600);
    	//return false;
    });

    $(".arrow_down, .down").hover(
	function(){
	  $(".arrow_down").filter(':not(:animated)').animate({
	     bottom:'50px'
	  },0);
	// This only fires if the row is not undergoing an animation when you mouseover it
	},
	function() {
	  $(".arrow_down").animate({
	     bottom:'60px'
	  },0);
	});

});