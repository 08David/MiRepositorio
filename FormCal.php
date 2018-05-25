<!DOCTYPE html>
<html>
	<head>
		<title>Calculadora</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<h2>MINI CALCULADORA CON PHP</h2>
		<form action="ProcesaCal.php" method="POST">
			Numero 1:
			<input name="num1" type="text" value="<?php if (isset($a)) {echo $a;} ?>" />
			<?php if(isset($mensajesError['num1'])) {echo $mensajesError['num1'];} ?><br/>
			Numero 2:
			<input name="num2" type="text" value="<?php if (isset($b)) {echo $b;} ?>" />
			<?php if(isset($mensajesError['num2'])) {echo $mensajesError['num2'];} ?><br/>
			Resultado:
			<input type="text" value="<?php if(isset($resul)) {echo$resul;} ?>">
			<br/><br/>
 
			SUMAR:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="op" value="1" checked/><br/>
			RESTAR:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
			<input type="radio" name="op" value="2"/><br/>
			MULTIPLICAR:&nbsp;
			<input type="radio" name="op" value="3"/><br/>
			DIVIDIR:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
			<input type="radio" name="op" value="4"/><br/>
			<br/>
			<input type="submit" name="enviar" value="CALCULAR"/>&nbsp;&nbsp;||&nbsp;&nbsp;
			<input type="reset" name="enviar"/>
		</form>
	</body>
</html>