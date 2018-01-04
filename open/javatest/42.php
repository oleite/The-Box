<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<?php include 'header.php'; ?>
		<h1>Testando Javascript</h1>
		<p id="test" class="rainbow">A vida, a verdade, o Universo e tudo mais!</p>
		<button type="button" onclick='getElementById("test").innerHTML = "42"'>A resposta</button>
		<?php include 'footer.php'; ?>
	</body>
</html>