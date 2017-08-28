<?php
  include 'assets/php/cms.php';
  include 'assets/php/content.php';
  $CMS = new CMS;
  $Content = new Content;
  if(!isset($_GET["page_id"])){
    $_GET["page_id"] = 1;
  }
?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>

    <!-- php load stylesheets -->
    <?php $CMS->getStylesheets(); ?>

  </head>
  <body>
    <!-- php load body-->
    <?php $CMS->getHeader(); ?>
    <?php $Content->getContent($_GET["page_id"]); ?>
    <!-- <?php $Content->form();?> -->
    <?php $CMS->getFooter(); ?>

    <!-- php laod scripts-->
    <?php $CMS->getScripts(); ?>
  </body>
</html>
