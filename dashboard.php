<? require 'dbconnect.php'; ?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/dashboard.css">
		<link rel="stylesheet" type="text/css" href="mobile/style.css">
		<title>Dashboard</title>
 <!--Navbar-->
        <div class="header">
            <div class="nav">
                <img id="divH1" src="./images/lpslogo2.png" alt="">
                    <ul>
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./dogs.php">Dogs</a></li>
                        <li><a href="./cats.php">Cats</a></li>
                        <li><a href="./bunnies.php">Bunnies</a></li>
                        <li><a href="./educateme.php">Educate me</a></li>
		    		    <li><a href="./about.php">About us</a></li>
		    		    <li><a href="./dashboard.php">Dashboard</a></li>
                        <li><a href="./loginregister.php">Login/Register</a></li>
                    </ul>
            </div>
        </div>
	</head>
    <body>
<? 
    $query = $pdo ->query('SELECT * FROM users');
    $users = $query->fetchALL();
?>

<br></br>
<br></br>

<div class="container">
    <a href="loginregister.php"><button class = "reg-btn">Register new Users</button></a>
    <a href="backend/emsection1.php"><button class = "reg-btn">ADD article to section 1</button></a>
    <a href="backend/emsection2.php"><button class = "reg-btn">ADD article to section 2</button></a>
    <a href="backend/admin_user.php"><button class = "reg-btn">Change role</button></a>

<br></br>

<!----Tabela qe shfaq users ---->
    <h2>Useret e regjistruar: </h2>
    <table border=5 class="table">
        <thead>
            <tr>
                <th>-ID-</th>
                <th>Emri</th>
                <th>Mbiemri</th>
                <th>Email</th>
                <th>Password</th>
                <th>Roli</th>
                <th></th>
                <th></th>
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
                    <td><? echo $user['roli']?></td>
                    <td><a href="loginregister.php?id=<? echo $user['id']?>"><button class = "submit-btn">EDIT</button></a></td>
                    <td><a href="backend/delete_users.php?id=<? echo $user['id']?>"><button class = "submit-btn">DELETE</button</a></td>
                </tr>
            <? } ?>
        </tbody>
    </table>
<? 
    $query = $pdo ->query('SELECT * FROM section1');
    $sec1 = $query->fetchALL();
?>
    <h2>Te dhenat e shtuara ne Section 1: </h2>
    <table border=5 class="table">
        <thead>
            <tr>
                <th>Image url</th>
                <th>Pershkrimi</th>
                <th>id</th>
                <th>class</th>
                <th>Autori</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <? foreach($sec1 as $s1){ ?>
                <tr>
                    <td><? echo $s1['image']?></td>
                    <td><? echo $s1['text']?></td>
                    <td><? echo $s1['sec_id']?></td>
                    <td><? echo $s1['class']?></td>
                    <td><? echo $s1['posted_by']?></td>
                    <td><a href="backend/delete_sec1.php?id=<? echo $s1['id']?>"><button class = "submit-btn">DELETE</button</a></td>
                </tr>
            <? } ?>
        </tbody>
    </table>
<? 
    $query = $pdo ->query('SELECT * FROM section2');
    $sec2 = $query->fetchALL();
?>
    <h2>Te dhenat e shtuara ne Section 2: </h2>
    <table border=5 class="table">
        <thead>
            <tr>
                <th>Image url</th>
                <th>Pershkrimi</th>
                <th>id</th>
                <th>class</th>
                <th>Autori</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <? foreach($sec2 as $s2){ ?>
                <tr>
                    <td><? echo $s2['image']?></td>
                    <td><? echo $s2['text']?></td>
                    <td><? echo $s2['sec_id']?></td>
                    <td><? echo $s2['class']?></td>
                    <td><? echo $s2['posted_by']?></td>
                    <td><a href="backend/delete_sec2.php?id=<? echo $s2['id']?>"><button class = "submit-btn">DELETE</button</a></td>
                </tr>
            <? } ?>
        </tbody>
    </table>

<? 
    $query = $pdo ->query('SELECT * FROM adopto');
    $adoptMe = $query->fetchALL();
?>
    <h2>Te dhenat nga Adopt me: </h2>
    <table border=5 class="table">
        <thead>
            <tr>
                <th>Emri</th>
                <th>Mbiemri</th>
                <th>Email</th>
                <th>Qyteti</th>
                <th>Kafsha</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <? foreach($adoptMe as $am){ ?>
                <tr>
                    <td><? echo $am['emri']?></td>
                    <td><? echo $am['mbiemri']?></td>
                    <td><? echo $am['email']?></td>
                    <td><? echo $am['qyteti']?></td>
                    <td><? echo $am['kafsha']?></td>
                    <td><a href="backend/delete_adopt.php?id=<? echo $am['id']?>"><button class = "submit-btn">DELETE</button</a></td>
                </tr>
            <? } ?>
        </tbody>
    </table>
</div>

<br></br>
<br></br>
<br></br>

            <?php include 'include/footer.php'; ?>
        
    </body>
</html>
