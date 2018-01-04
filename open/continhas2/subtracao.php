<html>
	<head>
		<title>Continhas - Multiplicação</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="xaver.css"/>
	</head>
	<body>
		<nav id="menu">
			<h1 id="menu">Faça sua conta</h1>
			<ul>
				<li><a href="adicao.php">Adição</a></li>
				<li><a href="subtracao.php">Subtração</a></li>
				<li><a href="multiplicacao.php">Multiplicação</a></li>
				<li><a href="divisao.php">Divisão</a></li>
				<li><a href="poten.php">Potenciação</a></li>
			</ul>
		</nav>
		<form method="get">
			<p>
				<label><input type="text" name="num1" maxlength="20" size="5" placeholder="Num1"/></label>
			</p>
			<p>
				<label><input type="text" name="num2" maxlength="20" size="5" placeholder="Num1"/></label>
			</p>
			<p>
				<input type="submit" value="Calcular"/>
			</p>
			<p id=cont><?php
				$x = $_GET["num1"];
				$y = $_GET["num2"];
				echo "$x - $y = ", $x-$y;
			?></p>
		</form>
	</body>
</html>