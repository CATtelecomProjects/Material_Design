<!--Content Infomation-->
<?php
	include "./includes/Class/Class.Admin.php";
	$Admin = new Admin();
?>
<!--<link href="../../css/base.min.css" rel="stylesheet">-->

<div class="col-md-14"> 
  <!-- Square card -->
  <style>
  .admin-header {
 padding:0px 0px 40px 0px;
 border-bottom:1px solid #e0e0e0;
  }

</style>
  <div class="card">
    <div class="card-main">
      <div class="card-inner">
        <div class="card-heading text-orange admin-header"><span class="fa-stack fa-lg"> <i class="fa fa-circle fa-stack-2x"></i> <i class="fa fa-cog fa-stack-1x fa-inverse"></i> </span> Administrator Panel</div>
        <div class="col-lg-4 col-md-12">
          <div class="content">
            <div class="container">
             
               <!-- <div class="col-lg-2 col-md-6">
                  <section class="content-inner">
                    <p class="margin-no-top"><a class="btn btn-purple waves-attach waves-button  btn-block btn-lg"><i class="fa fa-cogs"></i> ตั้งค่าระบบ</a></p>
                    <p class="margin-no-top"><a class="btn btn-green waves-attach waves-button waves-light btn-block btn-lg"><i class="fa fa-list"></i> เมนู</a></p>
                    <p class="margin-no-top"><a class="btn btn-blue waves-attach waves-button waves-light btn-block btn-lg"><i class="fa fa-comments"></i> ข่าวประกาศ</a></p>
                    <p class="margin-no-top"><a class="btn btn-orange waves-attach waves-button waves-light btn-block btn-lg">Green Button</a></p>
                  </section>
                </div>
                <div class="col-lg-2 col-md-6">
                  <section class="content-inner">
                    <p class="margin-no-top"><a class="btn btn-purple waves-attach waves-button  btn-block btn-lg"><i class="fa fa-newspaper-o"></i> จัดการเนื้อหาเว็บ</a></p>
                    <p class="margin-no-top"><a class="btn btn-green waves-attach waves-button waves-light btn-block btn-lg">Brand Colour</a></p>
                    <p class="margin-no-top"><a class="btn btn-blue waves-attach waves-button waves-light btn-block btn-lg">Blue Button</a></p>
                    <p class="margin-no-top"><a class="btn btn-orange waves-attach waves-button waves-light btn-block btn-lg">Green Button</a></p>
                  </section>
                </div>-->
                                           
                
                <div class="row">
                
                  <?php
				 
				foreach($Admin->arrAdminPage as $data){					
					echo " <div class=\"col-lg-2 col-md-2\">";
					echo " <section class=\"content-inner text-center\">   ";               
					echo "  <div class=\"pull-left tile-side  admin-pages\" id=\"".$data['id']."\" ref=\"".$data['title']."\">";
					echo "   <div class=\"avatar avatar-".$data['color']." avatar-inline\"> <i class=\"fa fa-2x ".$data['icon']."\"></i></div>";
					echo "    <br>".$data['title'];
					echo "  </div>  ";
					echo "  </section>";
					echo "  </div>";
				 }
				 
				 ?>     
                </div>
                
                

            </div>
          </div>
        </div>
      </div>
      <div class="mdl-card__menu">
        <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect"> <i class="fa fa-ellipsis-v"></i> </button>
      </div>
    </div>
  </div>
</div>


  <div id="show_admin_content" class="text-center"></div>
</div>


   
     
     
     
     
<!--End Content Infomation--> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="modules/admin/admin.js"></script>
