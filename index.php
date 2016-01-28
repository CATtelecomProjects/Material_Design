<?php
include("./session_timeout.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<meta content="initial-scale=1.0, width=device-width" name="viewport">
<meta http-equiv="refresh" content="<?=$inactive;?>;">
<title>ระบบสารสนเทศทางธุรกิจ (Business Information Systems)</title>

<!-- css -->
<link href="css/material.min.css" rel="stylesheet" >
<link href="css/base.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/fontface.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- favicon -->
<!-- ... -->
<!-- ie -->
<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>
<body class="avoid-fout page-orange">
<!-- Progress Bar-->
<div class="avoid-fout-indicator avoid-fout-indicator-fixed">
  <div class="progress-circular progress-circular-alt progress-circular-center">
    <div class="progress-circular-wrapper progress-circular-orange">
      <div class="progress-circular-inner">
        <div class="progress-circular-left">
          <div class="progress-circular-spinner"></div>
        </div>
        <div class="progress-circular-gap"></div>
        <div class="progress-circular-right">
          <div class="progress-circular-spinner"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Progress Bar--> 
<!--Header-->
<header class="header" style="height:80px;box-align:center">
  <ul class="nav nav-list pull-left">
    <li> <a data-toggle="menu" href="#profile"> <span class="icon icon-lg">menu</span> </a> </li>
  </ul><br>
  <span style="font-size:16pt;"><a  href="index.php"><img src="./images/logo-cat.png" alt="LOGO CAT" align="absmiddle"></a><strong>ระบบสารสนเทศทางธุรกิจ (Business Information System)</strong></span>
  <!--<ul class="nav nav-list pull-right">
    <li> <a data-toggle="menu" href="#menu"> <span class="access-hide">John Smith</span> <span class="avatar avatar-sm"><img alt="alt text for John Smith avatar" src="images/users/avatar-001.jpg" align="absmiddle"></span> </a> </li>
  </ul>-->
</header>
<!--End Header--> 

<!-- NAV Profile-->
<nav class="menu menu-left" id="profile">
  <div class="menu-scroll">
    <div class="menu-wrap">
      <div class="menu-top">
        <div class="menu-top-img"> <img alt="John Smith" src="http://www.cat.net.th/images/bgCAT600_450.gif"> </div>
        <div class="menu-top-info"> <a class="menu-top-user" href="javascript:void(0)"><span class="avatar pull-left"><img alt="alt text for John Smith avatar" src="images/users/avatar-001.jpg"></span>นายปิยะพงษ์ แก้วน่าน</a> </div>
        <div class="menu-top-info-sub"> <strong> รหัสพนักงาน : 354293 <br>
          ตำแหน่ง : พนักงานโปรแกรมคอมพิวเตอร์ 7 <br>
          หน่วยงาน : ส่วนระบบคลังข้อมูลสารสนเทศทางธุรกิจ </strong> </div>
      </div>
      <div class="menu-content">
        <ul class="nav">
          <li> <a href="javascript:void(0)"><span class="icon icon-lg">account_box</span>Profile Settings</a> </li>
          <li> <a href="javascript:void(0)"><span class="icon icon-lg">add_to_photos</span>Upload Photo</a> </li>
          <li> <a href="page-login.html"><span class="icon icon-lg">exit_to_app</span>Logout</a> </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<!-- End NAV Profile--> 

<!-- Body Content-->
<div class="content"> 
<?php //include("header.php"); ?>
  
  <!-- Menu & Body Content-->
  <div class="content-inner">
    <div class="container container-full">
      <div class="row row-clear"> 
        
        <!-- Left Menu-->
        <div class="col-md-3 content-fix">
          <div class="content-fix-scroll">
            <div class="content-fix-wrap">
              <div class="content-fix-inner">
                 <?php include("menu.php"); ?>
              </div>
            </div>
          </div>
        </div>
        <!-- End Left Menu--> 
         <!--  Main Content--> 
        <div class="col-md-9"> 
        <br>
        <?php
  //กำหนดการเรียกหน้า Page
$page =isset($_GET['page']) ? $_GET['page'] : "";
		if(isset($_GET['modules']) && isset($_GET['page']) ){
				$modules = $_GET['modules'];
				include("./modules/$modules/$page".".php");
		}else if(isset($_GET['modules']) && !isset($_GET['page']) ){
				$modules = $_GET['modules'];
				include("./modules/$modules/index.php");
		}else{				
				include('./main.php');	
		}
		
    ?>
        
        </div>
         <!-- End Main Content--> 
      </div>
    </div>
  </div>
  <!-- End Menu & Body Content-->
  
</div>
<!--End Body Content--> 
<footer class="mdl-mini-footer">
        <?php include("footer.php"); ?>
</footer>
 <?php include("dialog.php"); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/base.min.js"></script> 
<script src="js/material.min.js"></script>
<script src="js/main.js"></script>
<!-- Make sure the path to CKEditor is correct. -->
        <script src="js/ckeditor/ckeditor.js"></script>
</body>
</html>