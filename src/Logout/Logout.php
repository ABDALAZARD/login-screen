<?php
session_start();
session_destroy();
$msg = "Deslogado!";
header('location: ../../index.php?msg=' . $msg);