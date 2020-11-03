<?php

session_start();

$postagem = $_POST['post'];
$id = $_SESSION['id'];

if (strlen($postagem) > 0) {

    $conn = mysqli_connect("localhost", "root", "", "sistema");

    $result = $conn->query("insert into postagens(conteudo, fk_usuario) values ('$postagem', $id)");

    if ($result == true) {
        echo "
        <script>  

            alert('Postagem cadastrada com Sucesso!')
            location.href = 'home.php'      
        
        </script>";
    }
    else {

        echo "
        <script>  

            alert('Não foi possivel cadastrar a postagem!')
            location.href = 'home.php'      
        
        </script>";
    }
}
else {
    echo "
    <script>  

        alert('Digite algo para postar!')
        location.href = 'home.php'      
    
    </script>";
}