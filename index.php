
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>JPSystem</title>

        <link rel="stylesheet" href="./css/index.css">

    </head>
    <body>

        <h2>Bem Vindo a JPSystem</h2>
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form action="controls/cadastro_login.php">
                    <h1>Nova Conta</h1>
                    
                    <span></span>
                    <input type="text" placeholder="Nome" name="nome"/>
                    <input type="email" placeholder="Email" name="email" />
                    <input type="password" placeholder="Senha" name="senha" />
                    <button>Cadastrar</button>
                </form>
            </div>

            <!--INICIO LOGIN-->
            <div class="form-container sign-in-container">
                <form action="./controls/login.php" method="POST">

                    <h1>Login</h1>
                    
                    <span>Use sua conta</span>
                    <input type="text" placeholder="Login" name="login"/>
                    <input type="password" placeholder="Senha" name="senha" />
                    <a href="#">Esqueci minha Senha?</a>
                    <button name="btn-entrar">Entrar</button>
                </form>
            </div>
            <!--FIM LOGIN-->

            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Bem Vindo!</h1>
                        <p>Ja sou cadastrado.</p>
                        <button class="ghost" id="signIn">Entrar</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Ainda Não sou cadastrado!</h1>
                        <p>Digite seus dados pessoais e comece a jornada conosco</p>
                        <button class="ghost" id="signUp">Cadastrar</button>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <p>
                Desenvolvimento <i class="fa fa-heart"></i> por
                <a target="_blank" href="https://www.facebook.com/jozivam.pereiradasilva.1">JPSystem</a>
                - Projeto em andamento
                <a target="#">here</a>.
            </p>
        </footer>
        <script>

    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
      container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
      container.classList.remove("right-panel-active");
    });
        </script>

    </body>
</html>
