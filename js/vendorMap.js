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
