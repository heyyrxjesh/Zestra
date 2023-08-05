<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'admin' && $password === '##2024##') {
        header('Location: https://hrishavvv.github.io/-EverythingIsOk/');
        exit;
    } else {
        echo '<p>Invalid credentials. Please try again.</p>';
    }
}
?>
