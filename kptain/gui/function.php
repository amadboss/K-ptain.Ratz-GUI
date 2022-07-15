<?php
function conn() 
{
try{
    $pdo = new PDO('sqlite:'.dirname(__FILE__).'/kptain.db');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // ERRMODE_WARNING | ERRMODE_EXCEPTION | ERRMODE_SILENT
} catch(Exception $e) {
    echo "Impossible d'accéder à la base de données SQLite : ".$e->getMessage();
    die();
}
return $pdo;
}
?>

<?php

function requet1()
{
$pdo = conn();
$stmt = $pdo->prepare('SELECT * FROM user where id = 1');
$stmt->execute();
return $stmt->fetchAll();
}

function requet2()
{
$pdo = conn();
$stmt = $pdo->prepare('SELECT * FROM user where id = 2');
$stmt->execute();
return $stmt->fetchAll();
}

function requet3()
{
$pdo = conn();
$stmt = $pdo->prepare('SELECT * FROM user where id = 3');
$stmt->execute();
return $stmt->fetchAll();
}

function requet4()
{
$pdo = conn();
$stmt = $pdo->prepare('SELECT * FROM user where id = 4');
$stmt->execute();
return $stmt->fetchAll();
}

?>  