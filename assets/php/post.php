<?php
include 'db-config.php';
include 'content.php';
$content = new Content();
if(isset($_POST["newcontent"])){
  var_dump($_POST);
  $res = $content->addContent($_POST["name"],(int)$_POST["page_id"],$_POST["html"]);
  var_dump($res);
  echo "Content added!";
  header("Location: ../../index.php/?page_id=".(int)$_POST["page_id"]);
}
?>
