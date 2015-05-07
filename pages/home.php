<script type="text/javascript">
  var JSONmap = <?php echo json_encode($vendor->getVendorLocations($thePublisher['id'])); ?>;
  console.log(JSONmap);
</script>


<div class="bg"></div>

<div class="floatcap">
  <h2 class="hdrtxtwht">A hand up to a neighbor in need</h1>
</div>

<!-- JavaScript jQuery code from Bootply.com editor  -->
<script type='text/javascript'>
$(document).ready(function() {
  var jumboHeight = $('.jumbotronallax').outerHeight();
  function parallax(){
      var scrolled = $(window).scrollTop();
      $('.bg').css('height', (jumboHeight-scrolled) + 'px');
  }

  $(window).scroll(function(e){
      parallax();
  });

});
</script>
<div id="home" class="container-fluid">

  <div id="map">
    <!-- WHoever is on the map-->

    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <img src="<?php echo $thePublisher['logo']; ?>" alt="<?php echo $thePublisher['name']; ?>" class="img-responsive center-block">
      </div>
    </div>

    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h1 class="text-center"> Find A Street Magazine Vendor </h1>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <!-- Add more text-->
        <p class="text-center"> Street magazines offer a work opportunity for
          people experiencing homelessness or poverty. By buying, you create
          an empowering chance to be an entrepreneur instead of a beggar. Our
          magazines are written by people who have lived on the streets as a
          rare lens into the world of poverty. </p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div id="mapLayout" style="height:auto;padding:10px 0px;">
          <!-- Placeholder for map json_encode  -->
          <img src="/images/vendormap.jpg" class="img-responsive center-block">

        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <a href="/buy"><button type="button" class="btn btn-primary btn-lg btn-block">Buy A Zine Now!</button></a>
    </div>
  </div>

</div>
