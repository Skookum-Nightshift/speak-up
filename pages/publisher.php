<?php $allPublishers = $publisher->getAllPublishers(4); ?>
<?php if ($allPublishers): ?>
  <div id="publishers" class="container-fluid">
    <div class="row">
    <?php while ($publishers = $allPublishers->fetch_assoc()): ?>
      <div class="col-xs-6 col-sm-4 col-md-4">
        <div id="publisherImage" class="center-block">
          <img src="<?php echo $publishers['logo']; ?>" alt="<?php echo $publishers['name']; ?>" class="img-responsive center-block">
        </div>
        <div id="publisherName" class="text-center">
          <h3>
            <?php echo $publishers['name']; ?>
          </h3>
        </div>
        <div id="publisherDesc" class="text-left">
          <p>
            <?php echo $publishers['description']; ?> <a href="<?php echo $publishers['url']; ?>">Learn More !</a>
          </p>
        </div>
      </div>
    <?php endwhile; ?>
    </div>
  </div>
<?php endif; ?>
