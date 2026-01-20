
<?php
declare(strict_types=1);

$host = "localhost";
$dbname = " student_planner";
$username = "root";
$password = "root";

$dsn = "mysql:host=$host;$dbname;charset=utf8mb4";

$options = [
    PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION,
    PDO::ATTR_SEFAUKT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try{
    $pdo = new PDO($dsn, "root", $options);
}
catch (PDOException $e)
{
    die("Database connection failed.");
}
 