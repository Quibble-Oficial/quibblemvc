<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Quibble</title>
    <link rel="stylesheet" href="<?=$base?>/assets/css/login.css">
    <link rel="shortcut icon" href="<?=$base?>/assets/images/logo_padrao.svg" type="image/x-icon">
</head>
<body>
    <header>
        <h1>Quibble</h1>
    </header>

    <main>
        <section class="b1"> <!--Bloco 1-->
            <div> <!--Cada parte da sessão dividida por divs-->
                <h1>Faça Login!</h1>
            </div> 

            <div>
                <h2>Não deixe de acessar os nossos serviços</h2>
            </div>

            <div>
                <h3>Se você não tem uma conta</h3>
                <h3><span><a href="<?=$base?>/cadastro">Cadastre-se!</a></span></h3>
            </div>

            <div class="imagem">
                <figure>
                    <img src="<?=$base?>/assets/images/Imagem_Principal.png" alt="principal">
                </figure>
            </div>
        </section>

        <section class="b2"> <!--Bloco 2-->

            <form action="<?=$base?>/login" method="POST">
                 <div class="campos">
                     <input type="text" name="email" id="user" placeholder="E-mail">

                     <div class="password-container">
                         <input type="password" name="senha" id="senha" placeholder="Senha">
                         <img src="<?=$base?>/assets/images/olho_fechado.png" id="togglePassword" alt="Mostrar senha" class="toggle-password"> <!-- Ícone de olho -->
                     </div>
                     <p><a href="#">Esqueceu a senha?</a></p>
                 </div> 
               

                <div>
                    <input type="submit" value="Login">
                </div>

                <p id="meio">ou continue com</p>

                <div class="social-medias">
                    <figure>
                        <a href="https://pt-br.facebook.com/login/device-based/regular/login/" target="_blank"><img src="<?=$base?>/assets/images/Facebook_logo.png" alt="facebook"></a>
                    </figure>

                    <figure>
                        <a href="https://www.icloud.com/" target="_blank"><img src="<?=$base?>/assets/images/apple_logo.png" alt="apple"></a>
                    </figure>

                    <figure>
                        <a href="https://accounts.google.com/v3/signin/identifier?elo=1&ifkv=Ab5oB3p82b1ZUV5Q4y1fCUsGFJ2Ds0jncB_qFBzLRPqGlTfG8lAUuoYVomfzUEVbkbtTOpHH5Dstww&ddm=0&flowName=GlifWebSignIn&flowEntry=ServiceLogin&continue=https%3A%2F%2Faccounts.google.com%2FManageAccount%3Fnc%3D1" target="_blank"><img src="<?=$base?>/assets/images/google_logo.png" alt="google"></a>
                    </figure>
                </div>
            </form>
        </section>
    </main>
    <script src="<?=$base?>/assets/js/login.js"></script>
</body>
</html>