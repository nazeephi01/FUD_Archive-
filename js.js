$(document).ready(function() {
	$('#popout').css('display', 'none');
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
});

$('#addS').click(function() {// get the list of admins from DB
		$('#addS').css({"width":"96%", "background":"#fff"});
		$('#acc').css({"width":"80%", "background":"#ededed"});
		$('#curent').css({"width":"80%", "background":"#ededed"});
		$('.rightcon').load("addSuper.php");
		
	});
	
$('#acc').click(function() {// get the list of admins from DB
		$('#addS').css({"width":"80%", "background":"#ededed"});
		$('#acc').css({"width":"96%", "background":"#fff"});
		$('#curent').css({"width":"80%", "background":"#ededed"});
		$('.rightcon').load("addSuper.php");
		
	});

$('#SPAS').click(function() {// get the list of admins from DB
		var skul = "Faculty of Engineering";
		$.post('phpList_pro.php', { skul: skul },function(data) {
				$('.rightcon').html('<img src="images/loader.gif">');
				$('.rightcon').html(data);
			} );
		$('#SMIT').css({"width":"80%", "background":"#ededed"});
		$('#curent').css({"width":"80%", "background":"#ededed"});
		$('#SPAS').css({"width":"96%", "background":"#fff"});
		$('#SES').css({"width":"80%", "background":"#ededed"});
		$('#STSE').css({"width":"80%", "background":"#ededed"});
		$('#SAAT').css({"width":"80%", "background":"#ededed"});
		$('#SEET').css({"width":"80%", "background":"#ededed"});
});

$('#SES').click(function() {// get the list of admins from DB
		var skul = "Faculty of Pure and Applied Science";
		$.post('phpList_pro.php', { skul: skul }, function(data) {
		$('.rightcon').html(data).fadeIn(400);
		});
		$('#SMIT').css({"width":"80%", "background":"#ededed"});
		$('#curent').css({"width":"80%", "background":"#ededed"});
		$('#SPAS').css({"width":"80%", "background":"#ededed"});
		$('#SES').css({"width":"96%", "background":"#fff"});
		$('#STSE').css({"width":"80%", "background":"#ededed"});
		$('#SAAT').css({"width":"80%", "background":"#ededed"});
		$('#SEET').css({"width":"80%", "background":"#ededed"});
});

$('#SMIT').click(function() {// get the list of admins from DB
		var skul = "SMIT";
		$.post('phpList_pro.php', { skul: skul }, function(data) {
		$('.rightcon').html(data).fadeIn(400);
		});
		$('#SMIT').css({"width":"96%", "background":"#fff"});
		$('#curent').css({"width":"80%", "background":"#ededed"});
		$('#SPAS').css({"width":"80%", "background":"#ededed"});
		$('#SES').css({"width":"80%", "background":"#ededed"});
		$('#STSE').css({"width":"80%", "background":"#ededed"});
		$('#SAAT').css({"width":"80%", "background":"#ededed"});
		$('#SEET').css({"width":"80%", "background":"#ededed"});
});

$('#STSE').click(function() {// get the list of admins from DB
		var skul = "Faculty of Humanities,Managment and Social Science";
		$.post('phpList_pro.php', { skul: skul }, function(data) {
		$('.rightcon').html(data).fadeIn(400);
		});
		$('#SMIT').css({"width":"80%", "background":"#ededed"});
		$('#curent').css({"width":"80%", "background":"#ededed"});
		$('#SPAS').css({"width":"80%", "background":"#ededed"});
		$('#SES').css({"width":"80%", "background":"#ededed"});
		$('#STSE').css({"width":"96%", "background":"#fff"});
		$('#SAAT').css({"width":"80%", "background":"#ededed"});
		$('#SEET').css({"width":"80%", "background":"#ededed"});
});

$('#SAAT').click(function() {// get the list of admins from DB
		var skul = "SAAT";
		$.post('phpList_pro.php', { skul: skul }, function(data) {
		$('.rightcon').html(data).fadeIn(400);
		});
		$('#SMIT').css({"width":"80%", "background":"#ededed"});
		$('#curent').css({"width":"80%", "background":"#ededed"});
		$('#SPAS').css({"width":"80%", "background":"#ededed"});
		$('#SES').css({"width":"80%", "background":"#ededed"});
		$('#STSE').css({"width":"80%", "background":"#ededed"});
		$('#SAAT').css({"width":"96%", "background":"#fff"});
		$('#SEET').css({"width":"80%", "background":"#ededed"});
});
$('#SEET').click(function() {// get the list of admins from DB
		var skul = "Faculty of Agriculture and Life Science";
		$.post('phpList_pro.php', { skul: skul }, function(data) {
		$('.rightcon').html(data).fadeIn(400);
		});
		$('#SMIT').css({"width":"80%", "background":"#ededed"});
		$('#curent').css({"width":"80%", "background":"#ededed"});
		$('#SPAS').css({"width":"80%", "background":"#ededed"});
		$('#SES').css({"width":"80%", "background":"#ededed"});
		$('#STSE').css({"width":"80%", "background":"#ededed"});
		$('#SAAT').css({"width":"80%", "background":"#ededed"});
		$('#SEET').css({"width":"96%", "background":"#fff"});
});
/*$('#u_manage').click(function() {// get the list of sub-admins from DB
	
		var getAdmin = "yes";
		$.post('sub_adminlist.php', { getAdmin: getAdmin }, function(data) {
		$('#adminlist').html(data).fadeIn(400);
		});
});

$('#clear').click(function() {
		var issues = $('#txt_area').val();
		if(issues == ""){
			alert("Please specify the issues associated with the student Clearance");
			$('#txt_area').focus();
		}
		else {
				$.post('sub_adminlist.php', { getAdmin: getAdmin }, function(data) {
					$('#adminlist').html(data).fadeIn(400);
				});
			}
	});
*/