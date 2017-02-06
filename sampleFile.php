<?php
if(!empty($_GET['devIceNumber'])){
require 'application/autoload.php';
$appObj=new AppModel();    // create obj of App Model Class
$getData=$appObj->app_install($_POST['devIceNumber']);  // Call the method

}
?>
