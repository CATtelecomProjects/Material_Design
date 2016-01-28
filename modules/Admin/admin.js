
$(function(){
	$('.admin-pages').click(function(){
					var doAction = $(this).attr('id');
					var page_desc = $(this).attr('ref');					
					$('#show_admin_content').html("<img src='./images/loading-gear.gif'> Loading..");
					//window.location="?modules=Admin&page=main&op="+url;
					$.get("./modules/Admin/admin.php?do="+doAction+"&desc="+page_desc,function(data){
						$('#show_admin_content').html(data);	
					});
			});
});
