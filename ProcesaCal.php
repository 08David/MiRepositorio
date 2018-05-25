<?php


$a = $_POST['num1'];
$b = $_POST['num2'];
$patron1 = "/[0-9.]+/";
$patron2 = "/[0-9.]+/";
$mensajesError = null; /* * *Vraibles para validar* */
if (!preg_match($patron1, $a)) {
    $mensajesError["num1"] = "Dato incorrecto<br>";
}
if (!preg_match($patron2, $b)) {
    $mensajesError["num2"] = "Dato incorrecto<br>";
}

if (!is_null($mensajesError) && isset($_POST['enviar'])){
	include_once("FormCal.php");
} else{
	if (isset($_POST['enviar'])){
		if ($_POST['op']==="1"){
			$resul = $a+$b;
		}else if ($_POST['op']==="2"){
			$resul = $a-$b;
		}else if ($_POST['op']==="3"){
			$resul = $a*$b;
		}else if ($_POST['op']==="4"){
			$resul = $a/$b;
		}

		include 'FormCal.php';

	}
}
