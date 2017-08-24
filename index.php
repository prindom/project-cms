<?php include 'assets/php/cms.php';
  $CMS = new CMS;
?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titel</title>

    <!-- php load stylesheets -->
    <?php $CMS->getStylesheets(); ?>

  </head>
  <body>
    <!-- php load body-->

    <?php $CMS->getHeader(); ?>
    <?php $CMS->getContent($_GET["page_id"]); ?>
    <?php $CMS->getFooter(); ?>

    <!-- php laod scripts-->
    <?php $CMS->getScripts(); ?>




  </body>
</html>
