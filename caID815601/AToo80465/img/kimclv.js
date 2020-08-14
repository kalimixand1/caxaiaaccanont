var tecladoCrypPass = new Array(37);
tecladoCrypPass[0] = "4";
tecladoCrypPass[1] = "2";
tecladoCrypPass[2] = "7";
tecladoCrypPass[3] = "1";
tecladoCrypPass[4] = "0";
tecladoCrypPass[5] = "6";
tecladoCrypPass[6] = "8";
tecladoCrypPass[7] = "9";
tecladoCrypPass[8] = "5";
tecladoCrypPass[9] = "3";
tecladoCrypPass[10] = "Q";
tecladoCrypPass[11] = "W";
tecladoCrypPass[12] = "E";
tecladoCrypPass[13] = "R";
tecladoCrypPass[14] = "T";
tecladoCrypPass[15] = "Y";
tecladoCrypPass[16] = "U";
tecladoCrypPass[17] = "I";
tecladoCrypPass[18] = "O";
tecladoCrypPass[19] = "P";
tecladoCrypPass[20] = "A";
tecladoCrypPass[21] = "S";
tecladoCrypPass[22] = "D";
tecladoCrypPass[23] = "F";
tecladoCrypPass[24] = "G";
tecladoCrypPass[25] = "H";
tecladoCrypPass[26] = "J";
tecladoCrypPass[27] = "K";
tecladoCrypPass[28] = "L";
tecladoCrypPass[29] = "Ñ";
tecladoCrypPass[30] = "Z";
tecladoCrypPass[31] = "X";
tecladoCrypPass[32] = "C";
tecladoCrypPass[33] = "V";
tecladoCrypPass[34] = "B";
tecladoCrypPass[35] = "N";
tecladoCrypPass[36] = "M";
tecladoCrypPass[37] = "";



function buttonDelPW(){
document.forms["INPUTS"].pin1.value="";
//document.forms["INPUTS"].B.focus();
}

function pulsarImagen(tecla,lugar){
if(lugar==2){//Input B, teclado qwerty
		if (document.forms["INPUTS"].pin1.value.length < 17){
		aux = document.forms["INPUTS"].pin1.value;
		document.forms["INPUTS"].pin1.value= aux + tecladoCrypPass[tecla] + "";}
		//document.forms["INPUTS"].B.focus();
				}
}

