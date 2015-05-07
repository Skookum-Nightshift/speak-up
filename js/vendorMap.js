
var JSONmap = [{"vendor":{"id":"3","name":"Ruth White","photo":"\/images\/vendor\/ruthwhite.jpg","url":"ruthwhite","description":"<p>Ocean holiest merciful ultimate convictions of. Self passion spirit salvation sea inexpedient society insofar. Madness philosophy sexuality truth abstract. Value transvaluation chaos overcome selfish war chaos zarathustra.<\/p>\r\n\r\n<p>Salvation fearful prejudice victorious christian prejudice self ultimate spirit ultimate reason law intentions chaos. God selfish good strong truth love mountains joy truth truth decrepit transvaluation superiority merciful. Noble superiority chaos fearful truth salvation gains play transvaluation. Reason ultimate truth holiest transvaluation transvaluation justice fearful hatred faith merciful prejudice madness. Joy ultimate oneself love ideal pinnacle selfish decrepit passion ideal salvation intentions selfish.<\/p>\r\n\r\n<p>Pious moral salvation ultimate fearful truth intentions. Salvation marvelous faith burying ubermensch salvation. Hatred victorious christianity merciful salvation salvation hatred hatred reason revaluation selfish will love passion. Christian superiority overcome play overcome value burying virtues oneself suicide value of chaos snare.<\/p>\r\n\r\n<p>Against grandeur ultimate superiority faithful contradict god. Disgust suicide decrepit madness contradict fearful joy right ideal hatred pinnacle eternal-return.<\/p>","publisher_id":"1"},"location":[{"id":"3","vendor_id":"3","location":"35.226995, -80.840883","time":"5:00PM - 11:00PM"}]},{"vendor":{"id":"2","name":"Kyle Crimson","photo":"\/images\/vendor\/kylecrimson.jpg","url":"kylecrimson","description":"<p>Ocean holiest merciful ultimate convictions of. Self passion spirit salvation sea inexpedient society insofar. Madness philosophy sexuality truth abstract. Value transvaluation chaos overcome selfish war chaos zarathustra.<\/p>\r\n\r\n<p>Salvation fearful prejudice victorious christian prejudice self ultimate spirit ultimate reason law intentions chaos. God selfish good strong truth love mountains joy truth truth decrepit transvaluation superiority merciful. Noble superiority chaos fearful truth salvation gains play transvaluation. Reason ultimate truth holiest transvaluation transvaluation justice fearful hatred faith merciful prejudice madness. Joy ultimate oneself love ideal pinnacle selfish decrepit passion ideal salvation intentions selfish.<\/p>\r\n\r\n<p>Pious moral salvation ultimate fearful truth intentions. Salvation marvelous faith burying ubermensch salvation. Hatred victorious christianity merciful salvation salvation hatred hatred reason revaluation selfish will love passion. Christian superiority overcome play overcome value burying virtues oneself suicide value of chaos snare.<\/p>\r\n\r\n<p>Against grandeur ultimate superiority faithful contradict god. Disgust suicide decrepit madness contradict fearful joy right ideal hatred pinnacle eternal-return.<\/p>","publisher_id":"1"},"location":[{"id":"2","vendor_id":"2","location":"35.227350, -80.845314","time":"5:00PM - 8:00PM"}]},{"vendor":{"id":"1","name":"Joshua Blue","photo":"\/images\/vendor\/joshuablue.jpg","url":"joshuablue","description":"<p>Ocean holiest merciful ultimate convictions of. Self passion spirit salvation sea inexpedient society insofar. Madness philosophy sexuality truth abstract. Value transvaluation chaos overcome selfish war chaos zarathustra.<\/p>\r\n\r\n<p>Salvation fearful prejudice victorious christian prejudice self ultimate spirit ultimate reason law intentions chaos. God selfish good strong truth love mountains joy truth truth decrepit transvaluation superiority merciful. Noble superiority chaos fearful truth salvation gains play transvaluation. Reason ultimate truth holiest transvaluation transvaluation justice fearful hatred faith merciful prejudice madness. Joy ultimate oneself love ideal pinnacle selfish decrepit passion ideal salvation intentions selfish.<\/p>\r\n\r\n<p>Pious moral salvation ultimate fearful truth intentions. Salvation marvelous faith burying ubermensch salvation. Hatred victorious christianity merciful salvation salvation hatred hatred reason revaluation selfish will love passion. Christian superiority overcome play overcome value burying virtues oneself suicide value of chaos snare.<\/p>\r\n\r\n<p>Against grandeur ultimate superiority faithful contradict god. Disgust suicide decrepit madness contradict fearful joy right ideal hatred pinnacle eternal-return.<\/p>","publisher_id":"1"},"location":[{"id":"1","vendor_id":"1","location":"35.232341, -80.844620","time":"5:00PM - 8:00PM"},{"id":"4","vendor_id":"1","location":"35.223061, -80.842268","time":"8:00PM - 11:00PM"},{"id":"5","vendor_id":"1","location":"35.223772, -80.841139","time":"12:00PM - 3:00PM"}]}];
console.log(JSONmap);

function initialize() {
  // Charlotte Center latLng
  var myLatlng = new google.maps.LatLng(35.227087,-80.843127);
  var mapOptions = {
    zoom: 15,
    center: myLatlng
  };

  var map = new google.maps.Map(document.getElementById('mapLayout'), mapOptions);

  for (var i = 0; i < JSONmap.length; i++) {
    for (var j = 0; j < JSONmap[i].location.length; j++) {
      //var sites = markers[i];

      var vendorLatLng = JSONmap[i].location[j].location.replace(" ", "").split(",");
      var siteLatLng = new google.maps.LatLng(vendorLatLng[0], vendorLatLng[1]);


      //JSONmap[i].location[j].id

      var contentString = "<h3>" + JSONmap[i].vendor.name + "</h3>" +
        '<a class="" href="/profile/' + JSONmap[i].vendor.url + '">' +
        "<img style='height:200px;' class='img-responsive' src='../.." + JSONmap[i].vendor.photo + "'></img>" +
        "</a>" +
        "<h4> Time: " + JSONmap[i].location[j].time + "</h4>";

      var infowindow = new google.maps.InfoWindow({
          content: contentString
      });

      var marker = new google.maps.Marker({
          position: siteLatLng,
          map: map,
          title: JSONmap[i].vendor.name,
          html: contentString
      });

      google.maps.event.addListener(marker, "click", function () {
          // alert(this.html);
          infowindow.setContent(this.html);
          infowindow.open(map, this);
      });
    }
  }
}

google.maps.event.addDomListener(window, 'load', initialize);
