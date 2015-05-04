<script src="http://maps.googleapis.com/maps/api/js?libraries=places"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_5JuG3IwXN7vH_htjEhoAbTjc-9ia3xA"></script>
<script src="https://maps.gstatic.com/maps-api-v3/api/js/20/10/main.js"></script>

<style type="text/css">
  .row {
    padding: 10 10 10 10;
  }
  #nav {
    background: black;
  }
  #company {
    border-bottom: 2px red solid;
    background-image: url("http://placehold.it/1000x200");
  }
  #mapLayout { height: 300px }
  .zine-button {
    border-radius: 0px;
    /* Add red color and white text*/
  }
</style>

<div class="row">
</div>

<div id="home" class="container-fluid">

  <!--
    Set Background maybe?
  -->
  <div id="company">
    <div class="row">
      <div class="col-md-12">
        <h3 class="text-center">
          A hand up to a neighbor in need.
        </h3>
      </div>
    </div>
  </div>

  <div id="map">
    <!-- WHoever is on the map-->

    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <img src="../../images/logo.png" class="img-responsive center-block">
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
        <div id="mapLayout">

          <!-- Placeholder for map -->
          <img src="http://placehold.it/100x100" class="img-responsive center-block">

        </div>
      </div>
    </div>
  </div>

  <div id="nav">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <a href="/buy">
          <button class="center-block zine-button"> Buy Zine Now! </button>
        </a>
      </div>
    </div>
  </div>

</div>

<script src="../../js/vendorMap2.js"></script>
