    <div class="row">
      <div class="col-sm-2">
        <div id="zineImage">
          <img src="<?php echo $thePublisher['logo']; ?>" class="img-responsive pull-right">
        </div>
      </div>
      <div class="col-sm-9">
        <div id="zine">
          <div id="zineName">
            <h3><?php echo $thePublisher['name']; ?></h3>
          </div>
          <div id="zineInfo">
            <?php echo $thePublisher['description']; ?> <a href="<?php echo $thePublisher['url']; ?>">Learn More !</a>
          </div>

        </div>
      </div>
    </div>

    <div id="footer">
      <div id="footerContact">
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

  </body>
</html>
