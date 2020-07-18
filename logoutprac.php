<?php
    session_start();
    session_destroy();
    header('Location: loginpageprac.php');
    exit();
?>