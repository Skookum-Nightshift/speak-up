<?php $showLoginForm = true; ?>
<?php /* ############ Check if logged in ############ */ ?>
<!-- if ($uri[1] == "") {
  $PHPPage = $basedir . "/pages/home.php";
  $pageTitle = "HomePage";
} elseif(!file_exists($PHPPage) || $uri[1] == '404') {
  header("HTTP/1.0 404 Not Found");
  $PHPPage = $basedir . "/pages/404.php";
  $pageTitle = "404 Error Page";
} -->
<?php if ($uri[2] == 'login'): ?>
  <?php if ($_POST['login']): ?>
    <?php /*
    ######################################################
    Login
    ######################################################
    */ ?>
    <?php if ($main->loginUser($_POST['email'], $_POST['password'])): ?>
      <?php /* ############ Login Successfully    ############ */ ?>
      <?php /* ############ Redirect to dashboard ############ */ ?>
      <?php include($basedir . "/pages/admin/dashboard.php"); ?>
      <?php $showLoginForm = false; ?>
    <?php else: ?>
      <?php /* ############ Login Failed ############ */ ?>
      <center>
        <h2>You may already exist in our database.</h2>
      </center>
    <?php endif; ?>
  <?php endif; ?>
  <?php if ($_POST['create']): ?>
    <?php /*
    ######################################################
    Create Account
    ######################################################
    */ ?>
    <?php if ($main->setUser($_POST['email'], $_POST['password'])): ?>
      <?php /* ############ Registered Successfully ############ */ ?>
      <center>
        <h2>You have been registered</h2>
      </center>
    <?php else: ?>
      <?php /* ############ Registered Failed ############ */ ?>
      <center>
        <h2>You may already exist in our database.</h2>
      </center>
    <?php endif; ?>
  <?php endif; ?>
<?php endif; ?>
<?php if ($showLoginForm) include($basedir . "/pages/admin/login.php"); ?>