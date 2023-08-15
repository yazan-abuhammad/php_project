<?php

session_start();

include "connection.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $loginEmail = htmlspecialchars($_POST['loginEmail']);
    $loginPassword = htmlspecialchars($_POST['loginPassword']);

    // Check if the provided email and password match a record in the database
    $query = "SELECT * FROM users WHERE Email_Address = '$loginEmail'";
    $stmt = $connection->prepare($query);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user['Password'] == $loginPassword) {
        // Valid login credentials
        if ($user['Email_Address'] === 'yazan97@gmail.com') {
            $_SESSION['user_id'] = $user['id'];
            header("Location: admin.php");
        } else {
            $_SESSION['user_id'] = $user['id'];
            header("Location: welcome.php");
        }
    } else {
        echo "Invalid email or password";
    }
}
