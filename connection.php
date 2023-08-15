<?php
$db = "mysql:hose=localhost;dbname=php";
$user = "root";
$pass = "";


try {
    $connection = new PDO($db, $user, $pass);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "connection faild" . $e->getMessage();
}
