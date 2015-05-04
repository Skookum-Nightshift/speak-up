<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>RightStreet <?php echo $pageTitle; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div id="header">
      <nav class="navbar navbar-default navbar-static-top navbar-inverse">
        <div class="container">
          <div id="nav" class="row">
            <div class="col-md-4">
              <img src="http://placehold.it/720x170" class="img-responsive ">
            </div>

            <div class="col-md-4 center-block">
              <h1> Test </h1>
            </div>

            <div class="col-md-4">
              <ul class="nav nav-pills">
                <li role="presentation"<?php if (!isset($uri[1]) || $uri[1] == '') echo ' class="active"'; ?>><a href="/">Home</a></li>
                <li role="presentation"<?php if (isset($uri[1]) && ($uri[1] == 'vendor' || $uri[1] == 'profile')) echo ' class="active"'; ?>><a href="/vendor">Profile</a></li>
                <li role="presentation"<?php if (isset($uri[1]) && ($uri[1] == 'buy')) echo ' class="active"'; ?>><a href="/buy">Buy</a></li>
              </ul>
            </div>
          </div>

        </div>
      </nav>
    </div>
