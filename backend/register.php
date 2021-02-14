<? 
require '../dbconnect.php';
//-------insertimi te register ne database-------- 
if(isset($_POST['submit2'])){
	$emri = $_POST['emri'];
	$mbiemri = $_POST['mbiemri'];
	$email = $_POST['mail'];
	//$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
	//$password2 =password_hash($_POST['password2'], PASSWORD_BCRYPT);
	$password = $_POST['password'];
	$password2 = $_POST['password2'];

    $query = $pdo->prepare('SELECT email FROM users');
    	$query->execute();
    	$user = $query->fetchAll();

$sql = 'INSERT INTO users (emri,mbiemri, email, password, password2, roli) 
	VALUES (?,?,?,?,?,?)';
	$query = $pdo->prepare($sql);
	$query->execute([$emri,$mbiemri,$email,$password,$password2,0]);
	header('Location: ../loginregister.php');
}
?>
