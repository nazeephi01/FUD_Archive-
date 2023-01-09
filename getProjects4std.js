 $(document).ready(function(){
//still part of document.ready function
	var where = "";
		$.post('getProjects4std.php', { where: where },function(data)
 {//beginin of post function
						$('.feedback').html('<img src="images/loader.gif">');
						
						$('.feedback').html(data);
						
								$('.details').click(function(){
									var id = $(this).attr("data-page");
									$.post('popout.php', { id: id },function(data) {
									
									$('#pop').html('<img src="images/loader.gif">');
									$('#pop').html(data);
									
									$('#popout').slideDown(180, 'linear', function() {
									
										$('#popout').css('display', 'block');
									});
									});
								});
								
						$('#close').click(function(){
														$('#popout').css('display', 'none');
													});
					
						$('#popout > :not(#popoutContents)').click(function(){
																					$('#popout').css('display', 'none');
																			});
					
					
						$(document).keyup(function(e){
													if(e.keyCode==27){
																	$('#popout').css('display', 'none');
																	}
						
												});

												
  });//end of post function
	
});//end of document.ready

$('#title').keyup(function(){
		var title = $('#title').val();
		
		$.post('getProjects4std.php', { title: title },function(data) {
				$('.feedback').html('<img src="images/loader.gif">');
				$('.feedback').html(data);
			//beginin of popout
			$('.details').click(function(){
									var id = $(this).attr("data-page");
									$.post('popout.php', { id: id },function(data) {
									
									$('#pop').html('<img src="images/loader.gif">');
									$('#pop').html(data);
									
									$('#popout').slideDown(180, 'linear', function() {
									
										$('#popout').css('display', 'block');
									});
									});
								});
								
						$('#close').click(function(){
														$('#popout').css('display', 'none');
													});
					
						$('#popout > :not(#popoutContents)').click(function(){
																					$('#popout').css('display', 'none');
																			});
					
					
						$(document).keyup(function(e){
													if(e.keyCode==27){
																	$('#popout').css('display', 'none');
																	}
						
												});
			
				
		});//end of post
});

$('#obj').change(function(){
		var obj = $('#obj').val();
		$.post('getProjects4std.php', { obj: obj },function(data) {
				$('.feedback').html('<img src="images/loader.gif">');
				$('.feedback').html(data);
				//begigini of popout
				$('.details').click(function(){
									var id = $(this).attr("data-page");
									$.post('popout.php', { id: id },function(data) {
									
									$('#pop').html('<img src="images/loader.gif">');
									$('#pop').html(data);
									
									$('#popout').slideDown(180, 'linear', function() {
									
										$('#popout').css('display', 'block');
									});
									});
								});
								
						$('#close').click(function(){
														$('#popout').css('display', 'none');
													});
					
						$('#popout > :not(#popoutContents)').click(function(){
																					$('#popout').css('display', 'none');
																			});
					
					
						$(document).keyup(function(e){
													if(e.keyCode==27){
																	$('#popout').css('display', 'none');
																	}
						
												});
				
				
		});//end of post
});
