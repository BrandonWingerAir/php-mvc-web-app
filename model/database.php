<?php
    $dsn = 'mysql:host=localhost;dbname=php_mvc_assignment_tracker';
    $username = 'root';
    $password = '';

    try {
        $db = new PDO($dsn, $username);
    } catch (PDOException $e) {
        $error = "Database Error: ";
        $error .= $e->getMessage();
        include('view/error.php');
        exit();
    }