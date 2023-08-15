<?php

include "connection.php";

$query = "SELECT * FROM users";
$retrieve = $connection->query($query);
$dataBase = $retrieve->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($dataBase);
