

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>RightStreet <?php echo $pageTitle; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_5JuG3IwXN7vH_htjEhoAbTjc-9ia3xA&libraries=places"></script>
    <script src="https://maps.gstatic.com/maps-api-v3/api/js/20/10/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <link href="/css/rightstreet.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
  </head>
  <body>

    <div id="header" class="jumbotronallax">
      <nav class="navbar navbar-default navbar-static-top navbar-inverse transparent">
        <div class="container topper">
          <div id="nav">
            <div class="col-md-2">
              <a href="/"><img src="/images/rightstreet-logo-light-01-200x52.png" class="img-responsive"></a>
            </div>

            <div class="col-md-6">
              <h1 class="sr-only"> RightStreet | Speak Up Magazine </h1>
              <p class="hdrtxtwht">Street magazines give the disadvantaged an oportunity to earn money.<br><strong>rightstreet</strong> expands that oportunity.<p>
            </div>

            <div class="col-md-4">
              <ul class="nav nav-pills">
                <li role="presentation"<?php if (!isset($uri[1]) || $uri[1] == '') echo ' class="active"'; ?>><a href="/">Home</a></li>
                <li role="presentation"<?php if (isset($uri[1]) && ($uri[1] == 'vendor' || $uri[1] == 'profile')) echo ' class="active"'; ?>><a href="/vendor">Vendor Bios</a></li>
                <li role="presentation"<?php if (isset($uri[1]) && ($uri[1] == 'buy')) echo ' class="active"'; ?>><a href="/buy">Buy A Magazine</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
