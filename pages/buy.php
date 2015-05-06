<div id="purchase" class="container-fluid">
  <?php $vendorBuyingFrom = $vendor->getVendorCookie(); ?>
  <?php if ($vendorBuyingFrom <> ''): ?>
    <?php $getVendor = $vendor->getVendor(null, $vendorBuyingFrom); ?>
    <div class="row">
      <div class="col-md-12">
        <h3 class="text-center">
          You are supporting <?php echo $getVendor['name']; ?>
        </h3>
      </div>
      <?php $allZines = $vendor->getAllZines($getVendor['publisher_id'], 3); ?>
      <?php if ($allZines): ?>
        <?php while ($zines = $allZines->fetch_assoc()): ?>
        <div class="col-md-4" id="buy">
          <div id="buyImage">
            <img src="<?php echo $zines['image']; ?>" style="width:70%;" />
          </div>
          <div id="buyName">
            <?php echo $zines['name']; ?>
          </div>
          <div class="center-block" id="buyButtons">
            <button onclick="window.location.href='/buy/zine/1'">Buy This Zine</button>
          </div>
        </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  <?php else: ?>
    <a href="/vendor">Go to vendors page to support a vendor before buying</a>
  <?php endif; ?>
</div>
