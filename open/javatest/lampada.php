<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<?php include 'header.php'; ?>
		<h1>Testando Javascript</h1>
		<button onclick="document.getElementById('myImage').src='pic_bulbon.gif'">Ligar</button>

		<img id="myImage" src="pic_bulboff.gif" style="width:100px">

		<button onclick="document.getElementById('myImage').src='pic_bulboff.gif'">Desligar</button>
		<?php include 'footer.php'; ?>
	</body>
</html>