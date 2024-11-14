<?php
$host = 'localhost';
$username = 'bit_academy';
$password = 'bit_academy';
$database = 'OnePiece';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Fout bij de verbinding met de database: ' . $e->getMessage());
}
?>
