<?php 
//session_start();
//require_once './db_connect.php';
//
//
//
//$sql = "SELECT COUNT(*) AS total FROM user WHERE usuario = '$cad_nome'";
//$result = mysqli_query($conn, $sql);
//$row = mysqli_fetch_assoc($result);
//
//if ($row['total'] == 1){
//    $_SESSION['existe'] = true;
//    header('Location: index.php');
//    exit;
//}
//
//
//
//if ($conn -> query($sql) === TRUE) {
//    $_SESSION['cadastro'] = true;
//}
//header('Location: index.php');
//exit;
?>

<?php
session_start();
require_once('./db_connect.php');


if (empty($_POST['login']) || empty($_POST['senha'])) {
    header('Location: ../index.php');
    exit();
}

$cad_nome = mysqli_real_escape_string($conn, trim($_POST['nome']));
$cad_email = mysqli_real_escape_string($conn, trim($_POST['email']));
$cad_senha = mysqli_real_escape_string($conn, trim(md5($_POST['senha'])));


$query = "SELECT * FROM user WHERE login = '{$cad_nome}'";
$result = mysqli_query($conn, $query);
$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['usuario'] = $login;
    header('Location: ../views/dashboard.php');
    exit();
} else {
   $sql = "INSERT INTO user (nome, email, senha) "
        . "VALUES ('$cad_nome','$cad_email', '$cad_senha')";
    exit();
}       

?>