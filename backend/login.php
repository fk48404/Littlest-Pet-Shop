<? include '../dbconnect.php';

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = $pdo->prepare('SELECT id,emri,mbiemri, email,password,password2,roli FROM users WHERE email = :email');
    $query->bindParam(':email', $email);
    $query->execute();

    $user = $query->fetch();

       if($user['email'] == $email && $password == $user['password'] && $user['roli'] == 1){
              $_SESSION['id'] = $user['id'];
              header("Location: ../dashboard.php");
       } 
       else if($user['email'] == $email && $password == $user['password'] && $user['roli'] == 0) {
	       header("Location: ../index.php");
       }
       else{
	       header("Location: ../loginregister.php");
       }
}
?>
