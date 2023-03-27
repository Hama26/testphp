<?php
// (A) DATABASE SETTINGS - CHANGE TO YOUR OWN !
define("DB_HOST", "test102.database.windows.net");
define("DB_NAME", "bd");
define("DB_CHARSET", "utf8");
define("DB_USER", "admin101");
define("DB_PASSWORD", "Bestplayer123");

// (B) CONNECT TO DATABASE
$pdo = new PDO(
    "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET,
    DB_USER,
    DB_PASSWORD,
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NAMED
    ]
);

// (C) GET PRODUCTS
$stmt = $pdo->prepare("SELECT * FROM products");
$stmt->execute();
$products = $stmt->fetchAll();
?>