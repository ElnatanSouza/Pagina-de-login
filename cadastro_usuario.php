<?php
    /*

    1 - Recuperação das informações do formulario
    2 - Validação de dados
    3 - Cadastro em banco de dados 
    4 - Tratativa de duplicidade de dados/e-mail

    */
    $nome = $_POST['nome'];
    $imagem = $_POST['imagem'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $conf_senha = $_POST['conf_senha'];

    if (strlen($nome) > 3 && strlen($email) > 3 && strlen($senha) > 3 && $senha === $conf_senha) {
        
        $senha_cripto = md5($senha);

        // $conn = mysqli_connect(host, user, senha, database);
        $conn = mysqli_connect("localhost", "root", "", "sistema");

        // Verificar se o email ja foi cadastrado
        // Selecionar todos os emails do banco de dados e comparar com o email enviado pelo form
        // Se o email nao for encontrado, cadastre o usuario, e se for encontrado retorne uma mensagem para o usuario que esse email ja existe

        $sql = "INSERT INTO usuarios (nome, imagem, email, senha) values ('$nome', '$imagem', '$email', '$senha_cripto')";
        $conn->query($sql); // Recebe dois parametros "conexão com BD" e "instrução SQL"
        
        echo "<script>
        alert('Cadastro Efetuado')
        window.location.href = 'index.php'
        </script>
            "; 
    }
    else if (strlen($nome) <=3) {

        echo "<script>
        alert('Digite um nome valido para efetuar o cadastro')
        window.location.href = 'cadastro.php'
        </script>
            "; 

    }
    else if (strlen($email) <= 3) {

        echo "<script>
        alert('Digite um email valido para efetuar o cadastro')
        window.location.href = 'cadastro.php'
        </script>
            ";
    }
    else if (strlen($senha) <= 3) {

        echo "<script>
        alert('Digite uma senha valida para efetuar o cadastro')
        window.location.href = 'cadastro.php'
        </script>
            ";
    }
    else if ($senha != $conf_senha) {

        echo "<script>
        alert('Digite uma senha valida para efetuar o cadastro')
        window.location.href = 'cadastro.php'
        </script>
            ";
    }