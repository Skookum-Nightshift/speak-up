<?php $allVendors = $vendor->getAllVendors(3); ?>
<?php if ($allVendors): ?>
  <div id="vendors">
  <?php while ($vendors = $allVendors->fetch_assoc()): ?>
    <div class="row">
      <div class="col-xs-6 col-sm-4 col-md-3">
        <div id="vendorImage">
          <a class="thumbnail" href="/profile/<?php echo $vendors['url']; ?>">
            <img src="<?php echo $vendors['photo']; ?>" alt="<?php echo $vendors['name']; ?>" class="img-responsive center-block">
          </a>
        </div>
        <div id="vendorName">
          <h3 class="text-center">
            <?php echo $vendors['name']; ?>
          </h3>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
<?php endif; ?>
