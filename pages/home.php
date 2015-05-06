<script type="text/javascript">
  var JSONmap = <?php echo json_encode($vendor->getVendorLocations($thePublisher['id'])); ?>;
</script>
<div id="home" class="container-fluid">

  <!--
    Set Background maybe?
  -->
  <div id="company" class="row">
    <div class="col-md-12">
      <h3 class="text-center">
        A hand up to a neighbor in need.
      </h3>
    </div>
  </div>

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
      <div class="col-md-8 col-md-offset-2">
        <div id="mapLayout" style="height:auto;padding:10px 0px;">
          <!-- Placeholder for map json_encode  -->
          <img src="http://placehold.it/600x400" class="img-responsive center-block">

        </div>
      </div>
    </div>
  </div>

  <div id="nav" class="row">
    <div class="col-md-4 col-md-offset-4">
      <a href="/buy">
        <button class="center-block zine-button"> Buy Zine Now! </button>
      </a>
    </div>
  </div>

</div>
