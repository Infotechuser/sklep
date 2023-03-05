<?php
session_start();
unset($_SESSION['signedIn']);
header('Location: index.php');