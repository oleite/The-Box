<?php $title = "Login"; include 'header.php'; ?>
<canvas class="fireworks"></canvas>

<!-- Please don't crack me -->

<div id="start-menu" class="jumbotron vertical-center">
	<div class="container center-block text-center">
		<div style="width:500px; margin-left:auto; margin-right:auto; text-align:center">
			<form method="post">
				<img class="img-resposive" src="img/giftchest.png" width="150px">
				<h3>----<i class="fa fa-key" aria-hidden="true"></i>----</h3>
				<font color="red"><?php echo $error_msg; ?></font><br/>
				<?php if (USE_USERNAME) echo 'Login:<br/><input type="input" name="access_login" /><br />Senha:<br/>'; ?>
				<input type="password" name="access_password" /><p></p><input type="submit" name="Submit" value=">" />
			</form>
			<br />
			<small>| C418 - Cat |</small>
			<a style="font-size:9px; color: #B0B0B0; font-family: Verdana, Arial; position: absolute; bottom: 0; right: 0" href="http://www.zubrag.com/scripts/password-protect.php" title="Download Password Protector">Powered by Password Protect</a>
		</div>
	</div>
</div>
<audio autoplay>
  <source src="img/4ever/cat.mp3" type="audio/mp3">
</audio>

	
<?php include 'footer.php'; ?>






