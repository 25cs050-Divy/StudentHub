<?php
declare(strict_types=1);

$host = 'localhost';
$dbname = 'studenthub';
$dbUser = 'root';
$dbPassword = ''; // Default XAMPP setup. Set your own password if you configured one.

try {
    $pdo = new PDO(
        "mysql:host={$host};dbname={$dbname};charset=utf8mb4",
        $dbUser,
        $dbPassword,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]
    );
} catch (PDOException $e) {
    error_log('StudentHub database connection error: ' . $e->getMessage());
    http_response_code(500);
    exit('Unable to connect to the database. Check config/database.php and MySQL.');
}
