$(document).ready(function(){
	
	var fname = "";
	var uname = "";
	var email = "";
	var pwd = "";
	var repwd = "";
	
	
	$("#fname").keyup(function(){
		
		var value = $(this).val();
		if (value == "") {
			$("#errorfname").html("Masukkan nama lengkap");
			fname = "";
		}	else {
			$("#errorfname").html("<img src=\"static/checkbox.png\" height=\"15px\">");
			fname = value;
		}
	});
	
	$("#uname").keyup(function(){
		var value = $(this).val();
		if (value == "") {
			$("#erroruname").html("Masukkan username");
			uname = "";
		}	else if (value.length < 6) {
			$("#erroruname").html("Username harus lebih dari 6 karakter");
			uname = "";
		}	else {
			$.ajax({
				
				type:'POST',
				url:'script/checkuser.php',
				data:"uname="+value,
				success:function(msg){

					if (msg == "invalid"){
						$("#erroruname").html("Username sudah terdaftar");
						uname = "";
					}else {
					$("#erroruname").html("<img src=\"static/checkbox.png\" height=\"15px\">");
					uname = value;
					};
				}
				})
			}
		});
	
	function validateEmail($email) {
		var emailReg = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
		return emailReg.test($email);
		};
	
	$("#email").keyup(function() {
		
		var value = $(this).val();
		
		if (value == "") {
			$("#erroremail").html("Masukkan alamat email Anda.");
			email = "";
		} else if (validateEmail(value) == false){
			$("#erroremail").html("Format email Anda salah!");
			email = "";
		} else {
						
			$.ajax ({
				
				type:'POST',
				url:'script/checkemail.php',
				data:"email="+value,
				success:function(msg){
							
					if (msg == "invalid"){
						$("#erroremail").html("Alamat email sudah terdaftar");
						email = "";
						
					} else {
						$("#erroremail").html("<img src=\"static/checkbox.png\" height=\"15px\">");
						email = value;
					}
				}
				
			})
		}
				
	})
	
	
	
	$("#pwd").keyup(function(){
		
		var value = $(this).val();
		
		if (value == "") {
			$("#errorpwd").html("Masukkan Password");
			pwd = "";
		} else if (value.length < 8) {
			$("#errorpwd").html("Password minimal 8 karakter");
			pwd = "";
		} else {
			$("#errorpwd").html("<img src=\"static/checkbox.png\" height=\"15px\">");
			pwd = value;
		}
		
		
		
	});
	
	
	$("#repwd").keyup(function(){
		
		var value = $(this).val();
		
		if (value == "") {
			$("#errorrepwd").html("Masukkan Password");
			repwd = "";
		} else if (pwd !== value) {
			$("#errorrepwd").html("Password tidak sama");
			repwd = "";
		} else {
			$("#errorrepwd").html("<img src=\"static/checkbox.png\" height=\"15px\">");
			repwd = value;
		}
		
		
		
	});
	
	$("#sbtbtn").click(function(){
		
		if (fname == "" || uname == "" || email == "" || pwd == "" || repwd == "") {
			$("#errorsbtbtn").html("Masukkan data dengan benar");
		} else {
			
			$.ajax ({
				
				type:'POST',
				url:'script/datauser.php',
				data:"fname="+fname+"&uname="+uname+"&email="+email+"&pwd="+pwd,
				success:function(msg){
					$("#errorsbtbtn").html(msg);
				}
				
				
			});
			
		};
		
		
		
		
		
		
	});
	
	
});