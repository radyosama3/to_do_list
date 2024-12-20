<?php
// $conn= new PDO("mysql:host=localhost;port=3306;dbname=to-do-list","roor","") ;

$dsn = 'mysql:host=localhost;dbname=to-do-list';
$username = 'root'; // Correct username
$password = ''; // Default password for XAMPP
$conn = new PDO($dsn, $username, $password);


