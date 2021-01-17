<?
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=lpsdatabase","root","");
    }
    catch(PDOException $pdo){
        die("Lidhja deshtoi");
    }
?>
