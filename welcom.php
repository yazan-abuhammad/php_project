<?php
session_start();


if (!isset($_SESSION['user_id'])) {
    header("Location: login_and_register.html");
}

include "connection.php";


$userID = $_SESSION['user_id'];
$query = "SELECT * FROM users WHERE id = :userID";
$stmt = $connection->prepare($query);
$stmt->bindParam(":userID", $userID, PDO::PARAM_INT);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);


if (!$user) {
    header("Location: login_and_register.html");
    exit();
}
?>



<!DOCTYPE html>
<html>

<head>
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f7ff;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        h1 {
            color: #007bff;
        }

        p {
            margin-bottom: 10px;
        }

        form {
            margin-top: 20px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Welcome, <?php echo htmlspecialchars($user['fristname']); ?></h1>
        <p>Email: <?php echo htmlspecialchars($user['Email_Address']); ?></p>
        <p>Mobile: <?php echo htmlspecialchars($user['Phon_number']); ?></p>

        <form action="logout.php" method="post">
            <input type="submit" value="Logout">
        </form>
    </div>
</body>

</html>