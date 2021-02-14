<?
    require '../dbconnect.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $query = "DELETE FROM users WHERE id = :id";
    $query = $pdo->prepare($query);

    $query->execute(['id' => $id]);
?>

<center><h2>User-i u fshij me sukses</h2></center>
<? header("Location: ../dashboard.php");?>
