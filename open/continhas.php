<head>
	<title>praticando poarr</title>
	<meta charset="UTF-8"/>
</head>

<body>
	<div class="center">
		<h1>Menu Continhas</h1>
		<ul type="square" id="lista">
			<li>1)Adição</li>
			<li>2)Subtração</li>
			<li>3)Multiplicação</li>
			<li>4)Divisão</li>
		</ul>
		<br>
		<form method="get">
			<p>
				<label>Menu: <input type="text" name="menu" maxlength="1" size="1"/></label>
			</p>
			<p>
				<label> Num1= <input type="text" name="x" maxlength="5" size="10"/></label>
			</p>
			<p>
				<label> Num2= <input type="text" name="y" maxlength="5" size="10"/></label>
			</p>
			<p>
				<input type="submit" value="Calcular"/>
			</p>
		</form>
		<a id="conta"><p><?php
			$menu = $_GET["menu"];
			$x = $_GET["x"];
			$y = $_GET["y"];
			
			switch($menu){
				case 1:
					print "Adição: ";
					echo "$x + $y = ", $x+$y;
					break;
				case 2:
					echo "Subtração: ";
					echo "$x - $y = ", $x-$y;
					break;
				case 3:
					echo "Multiplicação: ";
					echo "$x . $y = ", $x*$y;
					break;
				case 4:
					echo "Divisão: ";
					echo "$x / $y = ", $x/$y;
					break;
				default:
					echo"Inválido: ";
					break;
			}
		?></p></a>
	</div>
</body>

<style>
	body{
		font-family: Arial;
	}
	p{
		font-size: 14;
	}
	h1{
		font-size: 20;
	}
	h2{
		font-size: 18;
	}
	ul#lista{
		font-size: 18;
		text-align: left;
		width: 25%;
		margin: auto;
	}
	a#conta{
		font-size: 24;
	}
	.center {
		margin: auto;
		width: 50%;
		border: 3px solid black;
		padding: 10px;
		text-align: center;
	}
</style>