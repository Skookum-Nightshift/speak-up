<div id="purchase">
  <?php $vendorBuyingFrom = $vendor->getVendorCookie(); ?>
  <?php if ($vendorBuyingFrom <> ''): ?>
    <?php $getVendor = $vendor->getVendor(null, $vendorBuyingFrom); ?>
    <div class="row">
      <div class="col-md-12">
        <h3 class="text-center">
          You are supporting <?php echo $getVendor['name']; ?>
        </h3>
      </div>
      <div class="col-md-12">
        <h3 class="text-center">
          You are supporting <?php echo $getVendor['name']; ?>
        </h3>
      </div>

      <div class="col-md-12" id="buy">
        <div id="buyImage">
          Default Zine
        </div>
        <div class="center-block" id="buyButtons">
          <button onclick="window.location.href='/buy/zine/1'">Buy This Zine</button>
        </div>
      </div>
    </div>
  <?php else: ?>
    <a href="/vendor">Go to vendors page to support a vendor before buying</a>
  <?php endif; ?>
</div>
