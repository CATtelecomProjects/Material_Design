<?php
		
	class Admin {
	var $arrAdminPage = array(array("id"=>"admin-configs",
												"title"=>"ตั้งค่าระบบ",
												"color"=>"blue",
												"icon"=>"fa-cogs"),
										array("id"=>"admin-menu",
												"title"=>"เมนู",
												"color"=>"green",
												"icon"=>"fa-list")	,
										array("id"=>"admin-news",
												"title"=>"ข่าวประกาศ",
												"color"=>"purple",
												"icon"=>"fa-comments"),
										array("id"=>"admin-webpage",
												"title"=>"จัดการเนื้อหาเว็บ",
												"color"=>"yellow",
												"icon"=>"fa-newspaper-o"),
										array("id"=>"admin-faq",
												"title"=>"คำถามบ่อย FAQ",
												"color"=>"blue",
												"icon"=>"fa-newspaper-o")	,
										array("id"=>"admin-download",
												"title"=>"ดาวน์โหลด",
												"color"=>"green",
												"icon"=>"fa-cloud-download")																
												);
								
	public function box_contents_top($title){
			 $str_content="<div class=\"card\">";
			 $str_content.=" <div class=\"card-main\">";
			 $str_content.="   <div class=\"card-inner\">";
			 $str_content.="     <h4>$title</h4>";
			 $str_content.="     <div class=\"col-lg-4 col-md-12\">";
			 $str_content.="       <div class=\"content\">";
			 $str_content.="         <div class=\"container\">";
			 $str_content.="          <div class=\"row\">";
              
		  echo $str_content;	
	}
	
	public function box_contents_bottom(){
			 $str_content="</div>";
			 $str_content.=" </div>";
			 $str_content.=" </div>";
  		     $str_content.=" </div>";
			 $str_content.=" </div>";
			 $str_content.=" </div>";
			 $str_content.=" </div>";
			 
              
		  echo $str_content;	
	}
	          

								
																
	} // End Admin Class
				?>