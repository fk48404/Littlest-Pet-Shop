<html>
<head>
	<title>Login/Register</title>
	<link rel="stylesheet" type="text/css" href="css/loginregister.css">
	<link rel="stylesheet" type="text/css" href="mobile/loginregister.css">

</head>
<body>
<!--HEADER-->
	<?php include 'include/header.php'; ?>
<br></br>

	<div class="pjesaContact">
	<h1>Per te na kontaktuar fillimisht duhet te ndjekni proceduen me poshte: </h1>
	<p>( Ju lutem regjistrohuni ne rast qe nuk keni nje llogari ne faqen tone, nuk do te zhgenjeheni  &#9787;) </p>

		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" name= "submit" class="toggle-btn" onclick="login()">Log In</button> 
				<button type="button" name= "submit2" class="toggle-btn" onclick="register()">Register</button> 
			</div>
			<div class="animals-icons">
				<img src="images/d.png">
				<img src="images/c.png">
				<img src="images/b.png">
			</div>
			<form action="loginregister.php" method="POST" id="login" class="input-group" onsubmit="return loginValidate()">
				<input type="text" id="email" class="input-field" placeholder="Email">
				<input type="password" id="pw" class="input-field" placeholder="Fjalekalimi"></br>
				<button type="submit" name= "submit" class="submit-btn" onclick="validimi(0)"> Log in</button>
			</form>
<? include 'backendphp/insertimeReg.php' ?>
			<form action="loginregister.php" method="POST" id="register" name="reg" class="input-group" onsubmit="return registerValidate()">
				<input type="text" id="emri" class="input-field" placeholder="Emri">
				<input type="text" id="mbiemri" class="input-field"  placeholder="Mbiemri">
				<input type="text" id="mail" class="input-field"  placeholder="Email">
				<input type="password" id="psw" class="input-field" name="password" placeholder="Fjalekalimi">
				<input type="password"  class="input-field" name="password2" placeholder="Konfirmo Fjalekalimin"></br>
				<button type="submit" name= "submit2" class="submit-btn" onclick="return validimi(1)">Register</button>
			</form>
		</div>
	</div>
	<?php include 'include/footer.php'; ?>	
	<script src="js/loginregister.js"></script>
</body>
</html>
