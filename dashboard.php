<?
    require 'dbconnect.php'; ?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="mobile/style.css">
		<title>Dashboard</title>
	</head>
	<body>
    <?php include 'include/header.php'; ?>

<?
    $query = $pdo ->query('SELECT * FROM registerusers');
    $users = $query->fetchALL();
?>
<br></br>
<br></br>
<div class="container">
<a href="loginregister.php"> Register USERS </a>
<br></br>
    <table border=2>
        <thead>
            <tr>
                <th>R_user ID</th>
                <th>Emri</th>
                <th>Mbiemri</th>
                <th>Email</th>
                <th>Password</th>
                <th>Password2</th>
                <th>Role</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
        </thead>
        <tbody>
            <? foreach($users as $user){ ?>
            <tr>
                <td><? echo $user['id']?></td>
                <td><? echo $user['emri']?></td>
                <td><? echo $user['mbiemri']?></td>
                <td><? echo $user['email']?></td>
                <td><? echo $user['password']?></td>
                <td><? echo $user['password2']?></td>
                <td><? echo $user['is_admin']?></td>
                <td><a href="loginregister.php?id=<? echo $user['id']?>">Edit</a></td>
                <td><a href="delete_users.php?id=<? echo $user['id']?>">Delete</a></td>
            </tr>
            <? } ?>
        </tbody>
    </table>
</div>
<br></br>
<br></br>
<br></br>
<br></br>
        <?php include 'include/footer.php'; ?>
	</body>
	</html>
