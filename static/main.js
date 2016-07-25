$(document).ready(function(){
	
	var nocm = $("#nocm").val(); //Kalau diberi nilai "" tidak bisa mengirim ke ajax saat ada record untuk nocm
	var namapasien = $("#namapasien").val();//Kalau diberi nilai "" tidak bisa mengirim ke ajax saat ada record untuk nocm
	var diag = "";
	var ats = "";
	var gol = "";
	var shift = "";
	
	
	$("#nocm").keyup(function(){
		
		var value = $(this).val();
		
		if (value == ""){
			$("#errornocm").html("Masukkan No. CM");
			nocm = "";
			
		} else if (value.length < 8){
			$("#errornocm").html("No. CM tidak lengkap");
			nocm = "";
			$("#form").html('');
			$("#form").css("border","");
			
		} else {
			$("#errornocm").html("<img src=\"static/checkbox.png\" height=\"15px\">");
			
			nocm = value;
			$.ajax ({
				
				type:'POST',
				url:'script/mainscript.php',
				data:"nocm="+value,
				success:function(msg){
					$("#form").html(msg);
					$("#form").css("border","1px solid black");
				}
				
				
			})
			
		};
		
		
		
	});
	

	
	$("#form").on("keyup", "#namapasien", function(){
		
		var value = $("#namapasien").val();
		
		if (value == "") {
			$("#errornama").html("Masukkan nama pasien");
			namapasien = "";
		} else {
			$("#errornama").html("<img src=\"static/checkbox.png\" height=\"15px\">");
			namapasien = $("#namapasien").val();;
		}
		
		
	});
	
	
	
	$("#form").on("keyup", "#diag", function(){
		
		var value = $("#diag").val();
		
		if (value == "") {
			$("#errordiag").html("Masukkan diagnosis");
			diag = "";
		} else {
			$("#errordiag").html("<img src=\"static/checkbox.png\" height=\"15px\">");
			diag = value;
		}
		
		
	});
	
	//untuk form ats
	
	$("#form").on("click", "#ats1", function(){
		
		ats = 1;
		$("#errorats").html("<img src=\"static/checkbox.png\" height=\"15px\">");
		
		
	});
	
	$("#form").on("click", "#ats2", function(){
		
		ats = 2;
		$("#errorats").html("<img src=\"static/checkbox.png\" height=\"15px\">");
		
		
	});
	
	$("#form").on("click", "#ats3", function(){
		
		ats = 3;
		$("#errorats").html("<img src=\"static/checkbox.png\" height=\"15px\">");
		
		
	});
	
	$("#form").on("click", "#ats4", function(){
		
		ats = 4;
		$("#errorats").html("<img src=\"static/checkbox.png\" height=\"15px\">");
		
		
	});
	
	$("#form").on("click", "#ats5", function(){
		
		ats = 5;
		$("#errorats").html("<img src=\"static/checkbox.png\" height=\"15px\">");
		
		
	});
	
	//untuk golongan iki
	
	$("#form").on("click", "#iki1", function(){
		
		gol = 1;
		$("#errorgol").html("<img src=\"static/checkbox.png\" height=\"15px\">");
		
		
	});
	
	$("#form").on("click", "#iki2", function(){
		
		gol = 2;
		$("#errorgol").html("<img src=\"static/checkbox.png\" height=\"15px\">");
		
		
	});
	
	// untuk shift jaga
	
	$("#form").on("click", "#pagi", function(){
		
		shift = 1;
		$("#errorshift").html("<img src=\"static/checkbox.png\" height=\"15px\">");
		
		
	});
	
	$("#form").on("click", "#sore", function(){
		
		shift = 2;
		$("#errorshift").html("<img src=\"static/checkbox.png\" height=\"15px\">");
		
		
	});
	
	$("#form").on("click", "#malam", function(){
		
		shift = 3;
		$("#errorshift").html("<img src=\"static/checkbox.png\" height=\"15px\">");
		
		
	});
	

	
	
	$("#form").on("click", "#submitbtn", function(){
		
		if (nocm == "" || namapasien == "" || diag == "" || ats == "" || gol == "" || shift == "") {
			$("#errorsubmt").html("Data belum lengkap");
		} else {
			
			$.ajax ({
				
				type:'POST',
				url:'script/dataiki.php',
				data:"nocm="+nocm+"&namapasien="+namapasien+"&diag="+diag+"&ats="+ats+"&gol="+gol+"&shift="+shift,
				success:function(){

					location.reload();
					
				}
				
				
			});
			
			
		};
		
	});
	
	$("#togglebtn").click(function(){
		$(".togtab").toggle();
		
	});
	
	
	$("#bulanlalu").click(function(){
		$(".togtab2").toggle();
		
	});
	
	
	
	$("#tablehari").html(function(){
		
		$.ajax ({
			
			type:'POST',
			url:'script/list.php',
			success:function(list){
				$("#tablehari").append(list);
				$(".numbered").each(function(i){
					$(this).html(i+1);
						});
			}
			
			
			
		
		
	})
		
		
	});
	

	
	$("#tablebln").html(function(){
		
		$.ajax ({
			
			type:'POST',
			url:'script/listbulan.php',
			success:function(list){
				$("#tablebln").append(list);
			}
			
			
			
		})
		
		
				
	});
	
	
	$("#tableblnlalu").html(function(){
		
		$.ajax ({
			
			type:'POST',
			url:'script/listbulanlalu.php',
			success:function(list){
				$("#tableblnlalu").append(list);
			}
			
			
			
		})
		
		
				
	});
	

	
	
	
	$("#tabeliki").html(function(){
		
		$.ajax({
			
			type:'POST',
			url:'script/tabeliki.php',
			success:function(list){
				$("#tabeliki").append(list);
				
				
			}
		})
		
	});

	
	$("#tabelikibulanlalu").html(function(){
		
		$.ajax({
			
			type:'POST',
			url:'script/tabelikibulanlalu.php',
			success:function(list){
				$("#tabelikibulanlalu").append(list);
				
				
			}
		})
		
	});
	
	
	
	
	
});