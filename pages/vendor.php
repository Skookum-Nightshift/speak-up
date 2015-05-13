<?php $allVendors = $vendor->getAllVendors(12, $thePublisher['id']); ?>
<?php if ($allVendors): ?>
  <div id="vendors" class="container-fluid">
    <div class="row">
    <?php while ($vendors = $allVendors->fetch_assoc()): ?>
      <div class="col-xs-6 col-sm-4 col-md-4">
        <div id="vendorImage" class="center-block">
          <a class="" href="/profile/<?php echo $vendors['url']; ?>">
            <img src="<?php echo $vendors['photo']; ?>" alt="<?php echo $vendors['name']; ?>" class="img-responsive img-circle center-block">
          </a>
        </div>
        <div id="vendorName" class="text-center">
          <h3>
            <?php echo $vendors['name']; ?>
          </h3>
        </div>
      </div>
    <?php endwhile; ?>
    </div>
  </div>
<?php endif; ?>
