<?php

session_start();

$email = $_POST['email'];
$senha = md5($_POST['senha']);

if (strlen($email) > 3 && strlen($senha) > 3) {
    $conn = mysqli_connect("localhost", "root", "", "sistema");

    //Execução da instrução SQL
    $sql = "SELECT * from usuarios WHERE email = '$email' AND senha = '$senha' ";

    $result = $conn->query($sql);

    //$usuarios recebe a lista de usuarios
    $usuarios = mysqli_fetch_all($result);

    $_SESSION['nome'] = $usuarios[0][1];
    $_SESSION['imagem'] = $usuarios[0][2];
    $_SESSION['email'] = $usuarios[0][3];
    $_SESSION['senha'] = $usuarios[0][4];

    header('Location: home.php');

}
else {
    echo "
    <script>
        alert('Email ou Senha Invalido!')
        location.href = 'index.php'
    </script>    
    ";
}