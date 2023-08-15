<!DOCTYPE html>
<html>

<head>
    <title>Database Table Viewer</title>
    <style>
        /* Style for the table */
        table {
            border-collapse: collapse;
            width: 80%;
            margin: auto;
            margin-top: 20px;
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e2e2e2;
        }
    </style>
</head>

<body>
    <h1>Database Table Viewer</h1>
    <table>
        <tr>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Family Name</th>
            <th>Email Address</th>
            <th>Phone Number</th>
            <th>Date of Birth</th>
        </tr>

        <?php
        include "connection.php"; // Include your database connection file

        $query = "SELECT * FROM users"; // Modify the query according to your table name
        $stmt = $connection->query($query);

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>{$row['fristname']}</td>";
            echo "<td>{$row['middlename']}</td>";
            echo "<td>{$row['last_name']}</td>";
            echo "<td>{$row['family_name']}</td>";
            echo "<td>{$row['Email_Address']}</td>";
            echo "<td>{$row['Phon_number']}</td>";
            echo "<td>{$row['Date_of_Birth']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>