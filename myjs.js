function servisSil(g_id){
	var yolla="s_id="+g_id;
	$.ajax({
		url:"servisSil.php",
		type:"POST",
		data:yolla,
		success:function(g_cevap){
			$('#msgBox').css("display","block");
	 		$('#msgBox').text(g_cevap).delay(600).hide(300);
	 		var gizle="#s"+g_id;
			$(gizle).css("display","none");
		}
	})
	
}

function servisOk(g_id){
	var veri="s_id="+g_id;
	$.ajax({
		url:"servisOk.php",
		type:"POST",
		data:veri,
		success:function(post_back){
			$('#msgBox').css("display","block");
			$('#msgBox').text(post_back).delay(600).hide(300);
			var gizle="#s"+g_id;
			$(gizle).css("display","none");
		}
	})
}


function servisGizle(g_id){
	var gizle="#s"+g_id;
	$(gizle).css("display","none");
}
function randevu(){

	var bolge=$("#bolge").val();

	var data="bolge="+bolge;
	$.ajax({
		url:'countService.php',
		type:'POST',
		data:data,
		success:function(cvp){
			$("#r_gunu").html(cvp);
		}
	})

}
