<?php

// In FinalVersion als Umgebungsvariable oder File
$secret = '123';

$token = $_POST['token'];
$isValid = strcmp($secret, $token);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
}

if (!$isValid) {
    die();
}

echo shell_exec('/usr/bin/git pull 2>&1');

?>
