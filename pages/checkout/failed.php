<div id="checkout" class="container-fluid"> 
  <div class="row">
    <div class="col-md-12">
      <h1 class="text-center">
        Credit Card Declined
      </h1>
      <p class="text-center">
        <?php if (isset($e)) print_r($e->getMessage()); ?>
      </p>
    </div>
  </div>
</div>