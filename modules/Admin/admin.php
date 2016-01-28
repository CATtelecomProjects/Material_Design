<?php
include ("../../includes/Class/Class.Admin.php");
$Admin = new Admin();
$Admin->box_contents_top($_GET['desc']);
include($_GET['do'].".php");
$Admin->box_contents_bottom();
?>          