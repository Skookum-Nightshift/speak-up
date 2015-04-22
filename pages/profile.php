<?php $profile = $vendor->getVendor(null, $uri[2]); ?>
<?php if ($profile): ?>
	<?php $vendor->setVendorCookie($uri[2]); ?>
	<div id="profile">
	  <div id="profileImage">
	    <img src="<?php echo $profile['photo']; ?>" alt="<?php echo $profile['name']; ?>">
	  <div>
	  <div id="profileName">
	    <?php echo $profile['name']; ?>
	  <div>
	  <div id="profileBio">
	    <?php echo $profile['description']; ?>
	  <div>
	<div>
<?php endif; ?>

<a href="/buy">Buy Now!</a>