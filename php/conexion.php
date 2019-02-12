<?php
$host = 'localhost';
$dbName = 'panaderia';
$usuario = 'root';
$password = 'root';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbName", $usuario, $password);


} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
