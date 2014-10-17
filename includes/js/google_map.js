jQuery(document).ready(function(){
	if(jQuery('#map-canvas').length)
	{
		google.maps.event.addDomListener(window, 'load', initialize);
	}
});

/**
 * Initialize google map
 */
function initialize() {
	var myLatlng = new google.maps.LatLng(gmap.lat, gmap.lng);
	var mapOptions = {
		zoom: parseInt(gmap.zoom),
		center: myLatlng
	};
	var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

	var marker = new google.maps.Marker({
		position: myLatlng,
		map: map,
		title: 'Home'
	});
}

