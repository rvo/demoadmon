<!DOCTYPE html>
<head>
	<title>Calcula el area de un rectangulo</title>
	<meta charset="UTF-8" />
</head>
<body>
	<h1>Calculo del Area</h1>
	<form name="enviarnumeros" action="intronum.php" method="POST" enctype="application/x-www-form-urlencoded">
		<label>Introduce la base:</label>
		<input type="text" name="base_txt" placeholder="base"/>
		<br/><br />
		<label>Introduce la altura:</label>
		<input type="text" name="altura_txt" placeholder="altura"/>
		<br/>
		<br />
		<input type="submit" name="enviar_btn" value="Envia los datos" />
	</form>
</body>
</html>