<div id="purchase" class="container-fluid">
  <?php $vendorBuyingFrom = $vendor->getVendorCookie(); ?>
  <?php if ($vendorBuyingFrom <> ''): ?>
    <?php $getVendor = $vendor->getVendor(null, $vendorBuyingFrom); ?>
    <div class="row" style="padding: 10px 0px;">
      <div class="col-md-3">
        <div id="buyImage center">
          <img src="<?php echo $getVendor['photo']; ?>" style="max-width:100px;width:100%" class="center-block img-responsive" />
        </div>
        <h3 class="text-center">
          You are supporting <br/> <a href="/profile/<?php echo $getVendor['url']; ?>"><?php echo $getVendor['name']; ?></a>
        </h3>
      </div>
      <?php $allZines = $vendor->getAllZines($getVendor['publisher_id'], 3); ?>
      <?php if ($allZines): ?>
        <?php while ($zines = $allZines->fetch_assoc()): ?>
        <div class="col-md-3 text-center" id="buy">
          <div id="buyImage">
            <img src="<?php echo $zines['image']; ?>" style="width:70%;" class="center-block img-responsive" />
          </div>
          <div id="buyName">
            <?php echo $zines['name']; ?>
          </div>
          <div class="center-block" id="buyButtons">
            <button onclick="window.location.href='/buy/zine/<?php echo $zines['id']; ?>'">Buy This Zine</button>
          </div>
        </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  <?php else: ?>
    <a href="/vendor">Go to vendors page to support a vendor before buying</a>
  <?php endif; ?>
</div>
