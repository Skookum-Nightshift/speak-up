<?php $allVendors = $vendor->getAllVendors(3); ?>
<?php if ($allVendors): ?>
	<?php while ($vendors = $allVendors->fetch_assoc()): ?>
	<div id="vendor">
	  <div id="vendorName">
	  	<?php echo $vendors['name']; ?>
	  </div>
	  <div id="vendorInfo">
	  	<?php //echo $vendors['description']; ?>
	  </div>
	  <div id="vendorLink">
	  	<a href="/profile/<?php echo $vendors['url']; ?>">Click on <?php echo $vendors['name']; ?> profile</a>
	  </div>
	  <div id="vendorImage">
	  	<img src="<?php echo $vendors['photo']; ?>" alt="<?php echo $vendors['name']; ?>">
	  </div>
	</div>
	<?php endwhile; ?>
<?php endif; ?>