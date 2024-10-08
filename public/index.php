<?php
require "../app/core/init.php";
DEBUG ? ini_set('display_errors', 1) : ini_set('display_errors', 0);

$app = new App;
$app->loadController();

/*
Check if session is active
if (session_status() == PHP_SESSION_ACTIVE)
    echo 'Session is active';
else 
echo 'Session not detected';
*/