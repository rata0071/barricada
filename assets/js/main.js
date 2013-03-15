$(document).ready(function(){

var d = new Date();

var mindate = new Date( d.getTime() + (d.getTimezoneOffset() * 60000) - (3600000 * 3) );

// Configura y carga el calendar
$("#fecha").datepicker( { 
	monthNames:["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"], 
	dayNames: ["Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado"], 
	dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
	dateFormat: "yy-mm-dd",
	minDate: mindate,
});

$('#fecha').datepicker('setDate',mindate);

var mapCenter = new google.maps.LatLng(-34.620927, -58.445649);

var mapOptions = {
  center: mapCenter,
  zoom: 12,
  mapTypeId: google.maps.MapTypeId.ROADMAP,
  streetViewControl: false,
  mapTypeControl: false,
};

var map = new google.maps.Map(document.getElementById("mapa"), mapOptions);

var loadMarkers = function() {
	var bounds = map.getBounds();
	if ( typeof ( bounds ) != 'undefined' ) {

	var	nelat = bounds.getNorthEast().lat(),
		nelng = bounds.getNorthEast().lng(),
		swlat = bounds.getSouthWest().lat(),
		swlng = bounds.getSouthWest().lng();

	for ( var i=0; i < markers.length; i++ ) {
		if ( markers[i].lat < nelat && markers[i].lng < nelng &&
			markers[i].lat > swlat && markers[i].lng > swlng && !markers[i].shown ) {
			
			latlng = new google.maps.LatLng(markers[i].lat, markers[i].lng);
			markers[i].mk = new google.maps.Marker({ position: latlng, map: map, icon: '/assets/img/' + markers[i].tipo + '-ico.png'});
			markers[i].shown = 1;
			markers[i].mk.id = markers[i].id;
		}
	}

	}
}

google.maps.event.addListener(map, 'idle', loadMarkers);


google.maps.event.addListener(map, 'click', function(e) {
  placeMarker(e.latLng, map);
});

function placeMarker(position, map) {
  if ( typeof marker != 'undefined' ) {
    marker.setMap(null);
  }
  var marker = new google.maps.Marker({
    position: position,
    map: map
  });
  $('#lat').val(position.lat());
  $('#lng').val(position.lng());

}

google.maps.event.trigger(map, 'resize');
map.setCenter(mapCenter);

}); // ready
