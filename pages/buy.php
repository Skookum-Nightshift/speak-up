<?php $vendorBuyingFrom = $vendor->getVendorCookie(); ?>
<?php if ($vendorBuyingFrom <> ''): ?>
	<?php $getVendor = $vendor->getVendor(null, $vendorBuyingFrom); ?>
	You are supporting <?php echo $getVendor['name']; ?>
	<div id="buy">
	  <div id="buyImage">
	    Default Zine
	  </div>
	  <div id="buyButtons">
	    <button onclick="window.location.href='/buy/zine/1'">Buy This Zine</button>
	  </div>
	</div>
<?php else: ?>
	<a href="/vendor">Go to vendors page to support a vendor before buying</a>
<?php endif; ?>