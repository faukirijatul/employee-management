<?php

    $config = parse_ini_file(__DIR__ . '/../config.ini');

    $host = $config['DB_HOST'];
    $dbname = $config['DB_NAME'];
    $username = $config['DB_USER'];
    $password = $config['DB_PASS'];

    try {
        // connect database PDO

        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        die("Connection Failed: " . $e->getMessage());
    }

?>