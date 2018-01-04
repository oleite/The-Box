<html>
	<head>
		<title>Continhas - Potencia</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="xaver.css"/>
	</head>
	<body>
		<?php include 'header1.php'; ?>
		<form method="get">
			<p id="contas">
				<label><input type="text" name="num1" maxlength="20" size="5" placeholder="Num1"/></label> elevado à <label><input type="text" name="num2" maxlength="20" size="5" placeholder="Num2"/></label><?php
				$x = $_GET["num1"];
				$y = $_GET["num2"];
				echo " = ", pow($x, $y);
			?>
			</p>
			<p>
				<input type="submit" value="Calcular"/>
			</p>
		</form>
		<?php include "footer.php"; ?>
	</body>
</html>