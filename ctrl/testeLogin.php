<?php
session_start();

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    //Acessa o sistema
    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //Query data base
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

    $result = $conn->query($sql);

    //Redirect
    if (mysqli_num_rows($result) < 1) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        echo "Credenciais inválidas!";
        header('Location: login.php');

    } else {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: system.php');
    }
} else {
    //not acess
    header('Location: login.php');
}
    