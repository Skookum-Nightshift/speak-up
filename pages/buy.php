<div id="purchase" class="container-fluid">
  <?php $vendorBuyingFrom = $vendor->getVendorCookie(); ?>
  <?php if ($vendorBuyingFrom <> ''): ?>
    <?php $getVendor = $vendor->getVendor(null, $vendorBuyingFrom); ?>
    <div class="row" style="padding: 10px 0px;">
      <div class="col-md-3 col-sm-4 col-xs-6">
        <div id="buyImage center">
          <img src="<?php echo $getVendor['photo']; ?>" style="width:100%" class="img-circle center-block img-responsive" />
        </div>
        <h3 class="text-center">
          You are supporting <br/> <a href="/profile/<?php echo $getVendor['url']; ?>"><?php echo $getVendor['name']; ?></a>
        </h3>
      </div>
      <?php $allZines = $vendor->getAllZines($getVendor['publisher_id'], 3); ?>
      <?php if ($allZines): ?>
        <?php while ($zines = $allZines->fetch_assoc()): ?>
        <div class="col-md-3 col-sm-4 col-xs-6 text-center" id="buy">
          <div id="buyImage">
            <img src="<?php echo $zines['image']; ?>" style="width:90%;" class="img-thumbnail center-block img-responsive" />
          </div>
          <div id="buyName">
            <?php echo $zines['name']; ?>
          </div>
          <div class="center-block" id="buyButtons">
            <form action="/checkout" method="POST">
              <input type="hidden" name="zine" value="<?php echo $zines['id']; ?>" />
              <script
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="pk_test_nk1moKc5WNItJFJtCspVWY01"
                data-amount="<?php echo $zines['price']; ?>"
                data-name="<?php echo $zines['name']; ?>"
                data-label="Buy This Zine"
                data-currency="USD"
                data-description="<?php echo $zines['name']; ?>"
                data-image="<?php echo $zines['image']; ?>">
              </script>
              <!-- pk_test_nk1moKc5WNItJFJtCspVWY01 pk_live_FbfHdbrF5DzB3QguXHYEWTsT -->
            </form>
            <!-- <button onclick="window.location.href='/buy/zine/<?php echo $zines['id']; ?>'">Buy This Zine</button> -->
          </div>
        </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  <?php else: ?>
    <div class="row" style="padding: 10px 0px;">
      <div class="col-md-12 text-center" id="buy">
        <h2>
          <a href="/vendor">Go to vendors page to support a vendor before buying</a>
        </h2>
      </div>
    </div>
  <?php endif; ?>
</div>
