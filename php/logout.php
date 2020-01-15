<?php
require_once "imports.php";
unset($_SESSION['email']);
unset($_SESSION['password']);
unset($_SESSION['role']);
header('Location: ../html/index.php');