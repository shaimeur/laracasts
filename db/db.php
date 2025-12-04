<?php

try {
    $pdo = new PDO(
        "pgsql:host=localhost;port=5432;dbname=laracasts",
        "laravel",
        "secret"
    );

    echo "Connected successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
