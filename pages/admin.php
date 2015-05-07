<?php
/*
  Developer: Joshua Pack
*/
?>
<?php $showLoginForm = true; ?>
<?php /* ############ Check if logged in ############ */ ?>
<?php 
  if ($main->getUserBySession() && $main->user['admin']) {
    if ($uri[1] == "admin" && $uri[2] != 'login') {
      $PHPPage = $basedir . "/pages/admin/" . strtolower($uri[2]) . ".php";
      if ($uri[2] == "") {
        $PHPPage = $basedir . "/pages/admin/dashboard.php";
        $pageTitle = "Dashboard";
      } elseif(!file_exists($PHPPage) || $uri[1] == '404') {
        header("HTTP/1.0 404 Not Found");
        $PHPPage = $basedir . "/pages/404.php";
        $pageTitle = "404 Error Page";
      }
      include($basedir . "/template/admin/nav.php");
      include($PHPPage);
    }
    $showLoginForm = false;
  }
?>
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
      <?php if ($main->user['admin']) $showLoginForm = false; ?>
      <?php if (!$main->user['admin']): ?>
        <center>
          <h2>You need to be authenticated.</h2>
        </center>
      <?php else: ?>
        <div class="container-fluid">
          <div class="page-header center-block row">
            <div class="col-sm-10 col-sm-offset-1 text-center">
              <h1>Login Successful</h1>
              <div class="alert alert-info" role="alert">You will be directed to the dashboard page in 3 seconds.</div>
            </div>
          </div>
        </div>
        <script>
          setTimeout(function() {window.location.replace("/admin");}, 3000);
        </script>
      <?php endif; ?>
    <?php else: ?>
      <?php /* ############ Login Failed ############ */ ?>
      <center>
        <h2>Failed Login.</h2>
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