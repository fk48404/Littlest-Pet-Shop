<? include './dbconnect.php';?>
<?
//-------opsioni EDIT te dashboard-------
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $sql = 'SELECT * FROM users WHERE id = :id';
    $query = $pdo->prepare($sql);
    $query->execute(['id'=> $id]);

	$user = $query->fetch();
	
	
	if(isset($_POST['submit2'])){
		$id = $_POST['id'];
        $emri = $_POST['emri'];
        $mbiemri = $_POST['mbiemri'];
        $email = $_POST['email'];
        $password = $_POST['password'];
		$password2 = $_POST['password2'];

        $sql = 'UPDATE users SET emri = :emri, mbiemri = :mbiemri, email = :email, 
                password = :password, password2 = :password2 WHERE id = :id';
        $query = $pdo->prepare($sql);
        
        $query->bindParam('emri', $emri);
        $query->bindParam('mbiemri', $mbiemri);
        $query->bindParam('email', $email);
        $query->bindParam('password', $password);
		$query->bindParam('password2', $password2);
        $query->bindParam('id', $id);

        $query->execute();    
    }
?>
