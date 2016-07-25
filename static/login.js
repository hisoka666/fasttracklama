$(document).ready(function(){
	
		$("#sbtbutton").click(function(){
		
		var uname = $("#username").val();
		var pwd = $("#pass").val();
		
		if(uname == "" || pwd == "") {
			$("#errorpass").html("Masukkan username dan password");
			
		} else {
			
			$.ajax({
				
				type:'POST',
				url:'script/logscript.php',
				data:"username="+uname+"&pass="+pwd,
				success:function(msg){

					if(msg == "valid"){
						location.href = "main.php"
					}else{
						$("#errorpass").html("Username atau password anda tidak terdaftar. Silahkan masukkan username dan password yang benar atau <a href=\"signuppage.html\">daftar baru</a>");
					}
				}
				
				
			})
		}
		
		
		
		
		
	});
	
	
	
	
});