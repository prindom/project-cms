<?php include 'cms.php';
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
    <?php var_dump($_GET);$CMS->getContent(1); ?>
    <?php $CMS->getFooter(); ?>

    <!-- php laod scripts-->
    <?php $CMS->getScripts(); ?>




  </body>
</html>
