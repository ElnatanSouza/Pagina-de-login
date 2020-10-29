<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset='utf-8' />
    <meta http-equiv='X-UA-Compatible' content='IE=edge' />
    <title>Cadastre-se</title>

    <meta name='viewport' content='width=device-width, initial-scale=1' />

    <link rel="stylesheet" href="./css/global.css" />
    <link rel="stylesheet" href="./css/cadastro.css" />
</head>

<body>
    <main>
        <div class="card">

            <h1>Cadastre-se</h1>

            <form action="cadastro_usuario.php" method="post">

                <input type="text" name="nome" placeholder="Digite o seu nome" required />
                <input type="url" name="imagem" placeholder="Imagem" />
                <input type="email" name="email" placeholder="Digite o seu email" required />
                <input type="password" name="senha" placeholder="Digite a sua senha" required />
                <input type="password" name="conf_senha" placeholder="Confirme a sua senha" required />
                <button type="submit"> <b> Cadastre-se </b> </button>
                <a href="./index.php">Já possui cadastro? realize o login clicando aqui.</a>

            </form>

        </div>
    </main>
</body>

</html>