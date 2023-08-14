<?php include "connection.php" ;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $user_email = $_POST['email'];
        $user_email = $_POST['password'];
    }


    $query = "SELECT * FROM users";
    $retrieve = $connection->query($query);
    $dataBase = $retrieve->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($dataBase);
}
