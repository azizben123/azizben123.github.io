<?php
$host = 'localhost';
$username = 'root';  
$password = '';      
$dbname = 'societe'; 
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}
?>