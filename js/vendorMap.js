var googleMap = "<div id='map'></div>";
$("#mapLayout").append(googleMap);

// Fix


  var JSONmap = [{"vendor":{"id":"3","name":"Ruth White","photo":"\/images\/vendor\/ruthwhite.jpg","url":"ruthwhite","description":"<p>Ocean holiest merciful ultimate convictions of. Self passion spirit salvation sea inexpedient society insofar. Madness philosophy sexuality truth abstract. Value transvaluation chaos overcome selfish war chaos zarathustra.<\/p>\r\n\r\n<p>Salvation fearful prejudice victorious christian prejudice self ultimate spirit ultimate reason law intentions chaos. God selfish good strong truth love mountains joy truth truth decrepit transvaluation superiority merciful. Noble superiority chaos fearful truth salvation gains play transvaluation. Reason ultimate truth holiest transvaluation transvaluation justice fearful hatred faith merciful prejudice madness. Joy ultimate oneself love ideal pinnacle selfish decrepit passion ideal salvation intentions selfish.<\/p>\r\n\r\n<p>Pious moral salvation ultimate fearful truth intentions. Salvation marvelous faith burying ubermensch salvation. Hatred victorious christianity merciful salvation salvation hatred hatred reason revaluation selfish will love passion. Christian superiority overcome play overcome value burying virtues oneself suicide value of chaos snare.<\/p>\r\n\r\n<p>Against grandeur ultimate superiority faithful contradict god. Disgust suicide decrepit madness contradict fearful joy right ideal hatred pinnacle eternal-return.<\/p>","publisher_id":"1"},"location":[{"id":"3","vendor_id":"3","location":"35.226995, -80.840883","time":"5:00PM - 11:00PM"}]},{"vendor":{"id":"2","name":"Kyle Crimson","photo":"\/images\/vendor\/kylecrimson.jpg","url":"kylecrimson","description":"<p>Ocean holiest merciful ultimate convictions of. Self passion spirit salvation sea inexpedient society insofar. Madness philosophy sexuality truth abstract. Value transvaluation chaos overcome selfish war chaos zarathustra.<\/p>\r\n\r\n<p>Salvation fearful prejudice victorious christian prejudice self ultimate spirit ultimate reason law intentions chaos. God selfish good strong truth love mountains joy truth truth decrepit transvaluation superiority merciful. Noble superiority chaos fearful truth salvation gains play transvaluation. Reason ultimate truth holiest transvaluation transvaluation justice fearful hatred faith merciful prejudice madness. Joy ultimate oneself love ideal pinnacle selfish decrepit passion ideal salvation intentions selfish.<\/p>\r\n\r\n<p>Pious moral salvation ultimate fearful truth intentions. Salvation marvelous faith burying ubermensch salvation. Hatred victorious christianity merciful salvation salvation hatred hatred reason revaluation selfish will love passion. Christian superiority overcome play overcome value burying virtues oneself suicide value of chaos snare.<\/p>\r\n\r\n<p>Against grandeur ultimate superiority faithful contradict god. Disgust suicide decrepit madness contradict fearful joy right ideal hatred pinnacle eternal-return.<\/p>","publisher_id":"1"},"location":[{"id":"2","vendor_id":"2","location":"35.227350, -80.845314","time":"5:00PM - 8:00PM"}]},{"vendor":{"id":"1","name":"Joshua Blue","photo":"\/images\/vendor\/joshuablue.jpg","url":"joshuablue","description":"<p>Ocean holiest merciful ultimate convictions of. Self passion spirit salvation sea inexpedient society insofar. Madness philosophy sexuality truth abstract. Value transvaluation chaos overcome selfish war chaos zarathustra.<\/p>\r\n\r\n<p>Salvation fearful prejudice victorious christian prejudice self ultimate spirit ultimate reason law intentions chaos. God selfish good strong truth love mountains joy truth truth decrepit transvaluation superiority merciful. Noble superiority chaos fearful truth salvation gains play transvaluation. Reason ultimate truth holiest transvaluation transvaluation justice fearful hatred faith merciful prejudice madness. Joy ultimate oneself love ideal pinnacle selfish decrepit passion ideal salvation intentions selfish.<\/p>\r\n\r\n<p>Pious moral salvation ultimate fearful truth intentions. Salvation marvelous faith burying ubermensch salvation. Hatred victorious christianity merciful salvation salvation hatred hatred reason revaluation selfish will love passion. Christian superiority overcome play overcome value burying virtues oneself suicide value of chaos snare.<\/p>\r\n\r\n<p>Against grandeur ultimate superiority faithful contradict god. Disgust suicide decrepit madness contradict fearful joy right ideal hatred pinnacle eternal-return.<\/p>","publisher_id":"1"},"location":[{"id":"1","vendor_id":"1","location":"35.232341, -80.844620","time":"5:00PM - 8:00PM"},{"id":"4","vendor_id":"1","location":"35.223061, -80.842268","time":"8:00PM - 11:00PM"},{"id":"5","vendor_id":"1","location":"35.223772, -80.841139","time":"12:00PM - 3:00PM"}]}];
  console.log(JSONmap);


var speakUp = {
  "vendors": [
    {
      "name": "Bill",
      "location": "7th Street Market",
      "time": "N/A",
      "dates": "2009 - 2012",
      "url": "http://www.uncc.edu/"
    },
    {
      "name": "Tom",
      "location": "Athernon Mill",
      "time": "N/A",
      "dates": "2015 - Future",
      "url": "http://www.gatech.edu/"
    }
  ]
}
/*
This file contains all of the code running in the background that makes resumeBuilder.js possible.

These are HTML strings. Use JavaScript functions to
replace the %data% placeholder text you see in them.
*/

/*
The next few lines about clicks are for the Collecting Click Locations quiz in Lesson 2.
*/
clickLocations = [];

function logClicks(x,y) {
  clickLocations.push(
    {
      "x": x,
      "y": y
    }
  );
  //console.log("x location: " + x + "; y location: " + y);
}

$(document).click(function(loc) {
  logClicks(loc.pageX, loc.pageY);
});

/*
This is the fun part. Here's where we generate the custom Google Map for the website.
See the documentation below for more details.
https://developers.google.com/maps/documentation/javascript/reference
*/
var map;    // declares a global map variable


/*
Start here! initializeMap() is called when page is loaded.
*/
function initializeMap() {

  var locations;

  var mapOptions = {
    disableDefaultUI: true
  };

  // This next line makes `map` a new Google Map JavaScript Object and attaches it to
  // <div id="map">, which is appended as part of an exercise late in the course.
  //map = new google.maps.Map(document.querySelector('#mapLayout'), mapOptions);


  /*
  locationFinder() returns an array of every location string from the JSONs
  written for bio, education, and work.
  */
  function locationFinder() {

    // initializes an empty array
    var locations = [];



    // iterates through school locations and appends each location to
    // the locations array
    for (var vendor in speakUp.vendors) {
      locations.push(speakUp.vendors[vendor].location);
    }



    return locations;
  }

  /*
  createMapMarker(placeData) reads Google Places search results to create map pins.
  placeData is the object returned from search results containing information
  about a single location.
  */
  function createMapMarker(placeData) {

    // The next lines save location data from the search result object to local variables
    var lat = placeData.geometry.location.k;  // latitude from the place service
    var lon = placeData.geometry.location.D;  // longitude from the place service
    var name = placeData.formatted_address;   // name of the place from the place service
    var bounds = window.mapBounds;            // current boundaries of the map window

    // marker is an object with additional data about the pin for a single location
    var marker = new google.maps.Marker({
      map: map,
      position: placeData.geometry.location,
      title: name
    });

    // infoWindows are the little helper windows that open when you click
    // or hover over a pin on a map. They usually contain more information
    // about a location.
    var infoWindow = new google.maps.InfoWindow({
      content: name
    });

    // hmmmm, I wonder what this is about...
    google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map,marker);
    });

    // this is where the pin actually gets added to the map.
    // bounds.extend() takes in a map location object
    bounds.extend(new google.maps.LatLng(lat, lon));
    // fit the map to the new marker
    map.fitBounds(bounds);
    // center the map
    map.setCenter(bounds.getCenter());
  }

  /*
  callback(results, status) makes sure the search returned results for a location.
  If so, it creates a new map marker for that location.
  */
  function callback(results, status) {
    if (status == google.maps.places.PlacesServiceStatus.OK) {
      createMapMarker(results[0])
    }
  }

  /*
  pinPoster(locations) takes in the array of locations created by locationFinder()
  and fires off Google place searches for each location
  */
  function pinPoster(locations) {

    // creates a Google place search service object. PlacesService does the work of
    // actually searching for location data.
    var service = new google.maps.places.PlacesService(map);

    // Iterates through the array of locations, creates a search object for each location
    for (place in locations) {

      // the search request object
      var request = {
        query: locations[place]
      }

      // Actually searches the Google Maps API for location data and runs the callback
      // function with the search results after each search.
      service.textSearch(request, callback);
    }
  }

  // Sets the boundaries of the map based on pin locations
  window.mapBounds = new google.maps.LatLngBounds();

  // locations is an array of location strings returned from locationFinder()
  locations = locationFinder();

  // pinPoster(locations) creates pins on the map for each location in
  // the locations array
  pinPoster(locations);

};

/*
Uncomment all the code below when you're ready to implement a Google Map!
*/

// Calls the initializeMap() function when the page loads
window.addEventListener('load', initializeMap);

// Vanilla JS way to listen for resizing of the window
// and adjust map bounds
window.addEventListener('resize', function(e) {
  // Make sure the map bounds get updated on page resize
  map.fitBounds(mapBounds);
});
