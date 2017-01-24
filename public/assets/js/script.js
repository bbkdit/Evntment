function initMap() {

  // Specify features and elements to define styles.
  var styleArray = [
    {
      featureType: "all",
      stylers: [
       { saturation: -80 }
      ]
    },{
      featureType: "road.arterial",
      elementType: "geometry",
      stylers: [
        { hue: "#00ffee" },
        { saturation: 50 }
      ]
    },{
      featureType: "poi.business",
      elementType: "labels",
      stylers: [
        { visibility: "off" }
      ]
    }
  ];

  // Create a map object and specify the DOM element for display.
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 22.5667, lng:  88.3667},
    scrollwheel: false,
    // Apply the map style array to the map.
    styles: styleArray,
    zoom: 12
  });
  
  var marker = new google.maps.Marker({
    position: {lat: 22.5667, lng:  88.3667},
    map: map,
	icon: 'img/marker.png',
    title: 'Hello World!'
  });
}

