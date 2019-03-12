<?php
session_start();
session_destroy();
$logout_info = 'Pomyślnie wylogowano z konta';
include 'homepage.html.php';
?>
