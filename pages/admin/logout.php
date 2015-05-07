<?php
session_unset();
?>
<div class="container-fluid">
  <div class="page-header center-block row">
    <div class="col-sm-10 col-sm-offset-1 text-center">
      <h1>You are now logged out</h1>
      <div class="alert alert-info" role="alert">You will be directed to the login page in 3 seconds.</div>
    </div>
  </div>
</div>
<script>
  setTimeout(function() {window.location.replace("/admin");}, 3000);
</script>