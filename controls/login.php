<?php
session_start();
require_once('./db_connect.php');


if (empty($_POST['login']) || empty($_POST['senha'])) {
    header('Location: ../index.php');
    exit();
}

$login = mysqli_real_escape_string($conn, $_POST['login']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);


$query = "SELECT * FROM user WHERE login = '{$login}' AND senha = md5('{$senha}')";


$result = mysqli_query($conn, $query);
$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['usuario'] = $login;
    header('Location: ../views/dashboard.php');
    exit();
} else {
    header('Location: ../index.php');
    exit();
}       

?>