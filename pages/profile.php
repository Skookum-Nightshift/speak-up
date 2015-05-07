<div id="bio" class="container-fluid">
  <div id="profile" class="row" >
    <?php $profile = $vendor->getVendor(null, $uri[2]); ?>
    <?php if ($profile): ?>
      <?php $vendor->setVendorCookie($uri[2]); ?>

      <div id="profileImage" class="col-sm-4 col-sm-offset-1 col-xs-12">
        <img class="img-responsive img-circle" src="<?php echo $profile['photo']; ?>" alt="<?php echo $profile['name']; ?>">
      </div>
      <div id="profileName" class="col-sm-6 col-xs-12">
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

<div class="container-fluid">
  <div class="row">
    <div class="col-md-4 col-md-offset-5">
      <a href="/buy"><button type="button" class="btn btn-primary btn-lg btn-block">Support Me and Buy A Zine Now!</button></a>
    </div>
  </div>
</div>
