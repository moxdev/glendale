function callback(){initMap(myMap),directionsService=new google.maps.DirectionsService}function initMap(e){var t=new google.maps.LatLngBounds,e=new google.maps.Map(document.getElementById(e),{maxZoom:18,mapTypeControl:!1,scrollwheel:!1,panControl:!1,rotateControl:!1,streetViewControl:!1,zoomControlOptions:{position:google.maps.ControlPosition.RIGHT_BOTTOM}}),n=new google.maps.Marker({position:{lat:38.993799,lng:-76.834592},map:e});t.extend(n.getPosition()),e.fitBounds(t),directionsDisplay=new google.maps.DirectionsRenderer,directionsDisplay.setMap(e)}function calcRoute(){var e=document.getElementById("start").value,t=document.getElementById("end").value,n={origin:e,destination:t,travelMode:"DRIVING"};""===e?(document.getElementById(mapResponses).innerHTML="Please enter a starting address.",document.getElementById(mapResponses).classList.add("error","active")):(directionsDisplay.setPanel(document.getElementById(mapResponses)),directionsService.route(n,function(e,t){document.getElementById(mapResponses).classList.remove("error","active"),"OK"===t?(document.getElementById(mapResponses).classList.add("active"),document.getElementById(mapResponses).innerHTML="",directionsDisplay.setDirections(e)):(document.getElementById(mapResponses).innerHTML="We're sorry, but an error occurred: <strong><em>"+t+"</em></strong>.<br>Please check your starting address and try again.",document.getElementById(mapResponses).classList.add("error","active"))}))}var myMap="map-canvas",directionsForm="get-directions",mapResponses="response-panel",apiKey="AIzaSyDqcS80RSqBcZepAEhhxKHkSzYLZeNI0Ho",directionsDisplay,directionsService;document.addEventListener("DOMContentLoaded",function(){if(document.getElementById(myMap)){var e;e=document.querySelector("html").lang?document.querySelector("html").lang:"en";var t=document.createElement("script");t.type="text/javascript",t.src="https://maps.googleapis.com/maps/api/js?key="+apiKey+"&callback=callback&language="+e,document.getElementsByTagName("body")[0].appendChild(t)}}),document.getElementById(directionsForm).addEventListener("submit",function(e){calcRoute(),e.preventDefault()});