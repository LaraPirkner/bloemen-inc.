<?php
session_start();
session_destroy();
// Redirect to the login page:
header('Location: flower-inc-login.php');
?>