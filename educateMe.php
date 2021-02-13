<?
	 include 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Educate Me</title>
		<link rel="stylesheet" type="text/css" href="css/educateMe.css">
		<link rel="stylesheet" type="text/css" href="mobile/educateMe.css">
	</head>
<body>
<!--HEADER-->
           <?php include 'include/header.php'; ?>
<br></br>
<!-- Fillimi i Body -->

	<h1 id="educateMe">Educate me</h1><br>
	<p id="eM">Me poshte gjeni fakte rreth qenve,maceve dhe lepujve që do t'ju bëjnë të <b>dashuroheni</b> përsëri...☺ </p>

<!-- Fillimi - Section 2 -->
<?
	$query = $pdo->query('SELECT * from section2');
	$section2 = $query->fetchAll();
?>
	<?php foreach($section2 as $s2){ ?>
		<section <? echo $s2['class'], $s2['sec_id'];?>>
			<article>
				<p><? echo $s2['text'];?></p>
			</article>
			<aside>
				<img src="images/<? echo $s2['image'];?> " alt="">
			</aside>
		</section>
	<?php } ?>
<!-- Perfundimi - Section 2 -->
<!-- Fillimi - Section 1 -->
<?
	$query = $pdo->query('SELECT * from section1 ');
	$section1 = $query->fetchAll();
?>		
	<?php foreach($section1 as $s1){ ?>
		<section <? echo $s1['class'], $s1['sec_id'];?>>
			<article>
				<img src="images/<? echo $s1['image'];?> " alt="">
			</article>
			<aside>
				<p><? echo $s1['text'];?></p>
			</aside>
		</section>
	<?php } ?>
<!-- Perfundimi - Section 1 -->
<!-- Footer -->
	<footer>
		<?php include 'include/footer.php'; ?>
	</footer>
	</body>
</html>
