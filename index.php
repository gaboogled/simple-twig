<?php require 'vendor/autoload.php'; ?>

<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <!--/ Head Meta Template   ------------------------------------------------------------------------------------>
    <template id="head-meta>"

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="theme-color" content="#fff">
    <meta name="description" content="A Twig | Material | HTML5 Boilerplate | Bootstrap 4 | Template">

    <title>simple Template</title>

    <link rel="manifest" href="site.webmanifest">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="icon.png">

    <link rel="stylesheet" href="css/reboot.css">
    <link href="css/simple.css" rel="stylesheet">
    <link href="css/timeofday.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Heebo:100,300,400,500,700,800,900|IBM+Plex+Mono|Libre+Barcode+128|Libre+Barcode+128+Text|Libre+Barcode+39|Libre+Barcode+39+Extended|Libre+Barcode+39+Extended+Text|Libre+Barcode+39+Text|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|PT+Mono|Questrial|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    </template>
    <!--/END: Head Meta Template   -------------------------------------------->
  </head>

  <body>

    <div id="welcome">Things are about to get a whole lot simpler!</div>

    <div id="mdc-button">
      <button class="simple-button mdc-button">Be simple</button>
    </div>


    <!--/ Footer Scripts Template   ------------------------------------------->
    <template id="footer-scripts">
      <?php
      /************************************************/
      /*        Webpack JS Compiler Injections        */
      /************************************************/
      ?>
      <script src="_dist/css/simple.css.js" async></script>
      <?php
      /***************   DO NO CHANGE   ****************/
      ?>
      <?php if jekyll.environment == 'pwa'
              include /assets/includes/_widget_service-worker.html
      ?>

      {% if site.doorbell %}
      {% include doorbell.html %}
      {% endif %}

      {% if site.cookie_consent == true %}
      {% include cookie-consent.html %}
      {% endif %}


    </template>
    <!--/END: Footer Scripts Template   --------------------------------------->

  </body>
</html>
