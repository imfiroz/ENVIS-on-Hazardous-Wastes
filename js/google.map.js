//// Start Google Maps ////
function initialize() {
  var myOptions = {
	zoom: 14,
	center: new google.maps.LatLng(21.112, 79.070),
	mapTypeId: google.maps.MapTypeId.TERRAIN
  }
  var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
}

function loadScript() {
  var script = document.createElement("script");
  script.type = "text/javascript";
  script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyBLiBTslPp5WvU1tQc5Iai2dO4gY6C7ngk&sensor=TRUE_OR_FALSE&callback=initialize";
  document.body.appendChild(script);
}
window.onload = loadScript;
//// End Google Maps ////