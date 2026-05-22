<?php

$host = 'db';
$db   = 'quiz_db'; 
$user = 'root'; 
$pass = 'root';

try {
    // Verbindung zur Datenbank herstellen
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (\PDOException $e) {
    // Falls was schiefläuft, Fehlermeldung ausgeben und abbrechen
    die("Datenbank-Verbindung fehlgeschlagen: " . $e->getMessage());
}