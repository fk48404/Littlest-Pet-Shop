<?
	include 'dbconnect.php';
	$query = $pdo->query('SELECT * from slider');
	$slider_images = $query->fetchAll();
?>
<!DOCTYPE html>
<html>
		<head>
			<title>Home Page</title>
				<link rel="stylesheet" type="text/css" href="css/style.css">
				<link rel="stylesheet" type="text/css" href="mobile/style.css">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
		</head>
    <body>
<!--HEADER-->
     <?php include 'include/header.php'; ?>
	<br>
	<br>
<!--- Fillimi i pjeses Slider --->

	<div id="borderSlider">
		<div class="slider">
			<div class="slideShow">
				<div class="slideShow">
					<?php foreach($slider_images as $img){ ?>
						<div class="mySlides">
							<img src="images/<? echo $img['images'];?> " alt="">
						</div>
					<?}?>
				</div>
			</div>
			<div class="pointers">
				<span class="dot" onclick="slideMomental(1)"></span>
				<span class="dot" onclick="slideMomental(2)"></span>
				<span class="dot" onclick="slideMomental(3)"></span>
				<span class="dot" onclick="slideMomental(4)"></span>
				<span class="dot" onclick="slideMomental(5)"></span>
				<span class="dot" onclick="slideMomental(6)"></span>
			</div>
		</div>
	</div>
<!--- Perfundimi i pjeses Slider --->
<br></br>
<!--- Fillimi i meeting --->
	<div id="meeting">
		<h2>Nuk mund te kujdeseni per kafshen tuaj? Silleni tek ne &#9787; </h2>
		<p><? echo $img['text'];?></p>
		<img src="images/<? echo $img['images'];?> " id="meet" alt="">
	</div>
<!--- Mbarimi i meeting --->
<br></br>
<!--- Fillimi i pjeses Description --->
	<div id="Description">
		<h2>Kafshet qe mund te gjeni tek ne !? &#9787; </h2>
		<p>Me shpresen se do te zgjerojme hapsiren tone si lokale ashtu dhe organizative </br>
		ju prezantojme llojet e kafsheve te cilat gjenden ne kopshtin tone.</p>
<br></br>
<?
	$query = $pdo->query('SELECT * from description_page');
	$description_page = $query->fetchAll();
?>
	<?php foreach($description_page as $desc){ ?>
		<section>
			<img src="images/<? echo $desc['image'];?> " id="foto" alt="">
				<a <? echo $desc['href'];?>>
					<h4> &#10148;<? echo $desc['h1'];?></h4></a>
			</br>
				<p><? echo $desc['text'];?></p>
		</section>
	<? } ?>
</div>
<!--- Perfundimi i pjeses Description --->

<br></br>
<br></br>
</body>
<!-- Perfundimi i BODY -->
<!--- Fillimi i pjeses Footer --->
	<footer>
		<div id="mainfooter">
			<section id="footerpart1">
				<img id="webpagephotoF" src="images/lpslogo2.png" alt="webpage">
				<h3 id="h3F">Ne jemi ketu per kafshen tuaj!</h3>
				<p id="wbaboutF">Per te marr info me shume rreth nesh vizito faqen
					<a href="about.php" id="h3F"><u><b>About</b></u></a></p>
				
			</section>
			
			<section id="footerpart2">
				<img id="socialmediaF" src="images/soc.png" alt="foto">
				<h3 id="h3F" >Na kontaktoni</h3>
				<p id="wbaboutF"> Per me shume vizito faqen
					<a href="adoptMe.php" id="h3F"><u><b>Adopt Me</b></u></a></p>
			</section>
		</div>
<!--- Perfundimi i pjeses Footer --->
<br></br>
	<?php include 'include/footer.php'; ?>
	<script src="js/slider.js"></script>
</html>
