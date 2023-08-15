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

    if ($user && $user['Password'] === $loginPassword) {
        // Valid login credentials
        $_SESSION['user_id'] = $user['id'];
        header("Location: ewde.html");
    } else {

        echo "Invalid email or password";
    }
}
