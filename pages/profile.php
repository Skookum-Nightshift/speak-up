<div id="bio" class="container-fluid">
  <div id="profile" class="row" >
    <?php $profile = $vendor->getVendor(null, $uri[2]); ?>
    <?php if ($profile): ?>
      <?php $vendor->setVendorCookie($uri[2]); ?>

      <div id="profileImage" class="col-md-2 col-md-offset-2 col-sm-2">
        <img class="img-responsive" src="<?php echo $profile['photo']; ?>" alt="<?php echo $profile['name']; ?>">
      </div>
      <div id="profileName" class="col-md-8 col-sm-10">
        <h3>
          <?php echo $profile['name']; ?>
        </h3>
        <p>
          <?php echo $profile['description']; ?>
        </p>
      </div>
    <?php endif; ?>
  </div>

</div>

<div id="nav" class="container-fluid">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <a href="/buy">
        <button class="center-block zine-button"> Buy Zine Now! </button>
      </a>
    </div>
  </div>
</div>
