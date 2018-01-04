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
				Raiz Quadrada de <label><input type="text" name="num1" maxlength="20" size="5" placeholder="Num1"/></label> é igual à <?php
				$x = $_GET["num1"];
				echo sqrt($x);
			?>
			</p>
			<p>
				<input type="submit" value="Calcular"/>
			</p>
		</form>
		<?php include "footer.php"; ?>
	</body>
</html>