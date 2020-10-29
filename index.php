<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <title>Entre ou Cadastre-se</title>

    <link rel="stylesheet" href="./css/global.css" />
    <link rel="stylesheet" href="./css/login.css" />
</head>

<body>
    <main>
        <section class="painel-login">

            <div class="card">

                <h1>Entre ou cadastre-se</h1>

                <form action="login_usuario.php" method="post">

                    <input type="email" name="email" placeholder="E-mail" />
                    <input type="password" name="senha" placeholder="Senha" />
                    <button type="submit"> Entrar </button>
                    <a href="./cadastro.php">Ainda não possui cadastro? clique aqui.</a>

                </form>

            </div>

        </section>

        <section class="painel-imagem">

            <img src="./img/login.svg" alt="Login" />

        </section>
    </main>
</body>

</html>