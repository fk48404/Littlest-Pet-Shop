<? 
require '../dbconnect.php';

if(isset($_POST['upload'])){
	$image = $_POST['image'];
	$text = $_POST['text'];
	$sec_id = $_POST['sec_id'];
    $class = $_POST['class'];
	$posted_by = $_POST['posted_by'];

    $query = $pdo->prepare('SELECT email FROM section1');
    $query->execute();
    $user = $query->fetchAll();

$sql = 'INSERT INTO section1 (image,text, sec_id, class,posted_by) 
	VALUES (?,?,?,?,?)';
	$query = $pdo->prepare($sql);
	$query->execute([$image,$text,$sec_id,$class,$posted_by]);
	header('Location: ../educateMe.php');
}
?>
<html>
<body>
<link rel="stylesheet" type="text/css" href="sections.css">
<? include 'header.php'; ?>



<div class="PjesaEducateMe">
<h1>Ketu mund te shtoni artikull ne faqen Educate Me</h1>
<h4>Ju lutem te i shikoni keshillat e me poshtme ne menyre qe te mos kete probleme ne dizajn :)</h4>
<p>Ne rast se zgjedhni klasen <b>section1</b> id e artikullit te jete nje nga keto: <br>
	<u>cat1</u>, <u>bulldog</u> apo <u>blueCat</u></p> 
	<br>
</div>	
<form action="emsection1.php" method="POST" class="input-group">
		<input type="text" name="image" class="input-field" placeholder="image"></br></br>
		<input type="text" name="text" class="input-field"  placeholder="Pershkrimi"></br></br>
		<input type="text" name="sec_id" class="input-field"  placeholder="sec_id (psh: id='cat1')"></br></br>
		<input type="text" name="class" class="input-field" placeholder="class (section1)"></br></br>
		<input type="text" name="posted_by" class="input-field" placeholder="Emri dhe mbiemri i autorit"></br></br>
				
		<button type="submit" name= "upload" class="upload-btn" >Upload</button>
</form>
<br></br>
<?php include '../include/footer.php'; ?>
</body>
</html>
