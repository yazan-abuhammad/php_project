<?php

include "connection.php";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = htmlspecialchars($_POST['fristname']);
    $secondName = htmlspecialchars($_POST['middlename']);
    $thirdName = htmlspecialchars($_POST['lastname']);
    $familyName = htmlspecialchars($_POST['familyname']);
    $EmailAddress = htmlspecialchars($_POST['EmailAddress']);
    $password = htmlspecialchars($_POST['passwordsing']);
    $Phon_number = htmlspecialchars($_POST['Phonnumber']);
    $DateofBirth = htmlspecialchars($_POST['DateofBirth']);


    $query = "INSERT INTO users(fristname , middlename , last_name , family_name ,Phon_number, Date_of_Birth , Email_Address , Password) 
    VALUES ('$firstName' , '$secondName' , '$thirdName' , '$familyName' , '$Phon_number','$DateofBirth' ,'$EmailAddress' , '$password' ) ";
    $connection->exec($query);

    header("Location: login_and_register.html");
}
