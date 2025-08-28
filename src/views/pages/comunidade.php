<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?=$base;?>/assets/images/logo_padrao.svg" type="image/x-icon">
    <title>Quibble</title>
    <link rel="stylesheet" href="<?=$base;?>/assets/css/comunidade.css">
    <link rel="stylesheet" href="<?=$base;?>/assets/js/animacoes.css">
    <!-- Anime.js CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
</head>

<body>
    <div id="bg-animado"></div>

    <!-- ANIMAÇÃO DE ENTRADA DO LOGO -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            anime({
                targets: 'aside h1',
                translateY: [-100, 0],
                opacity: [0, 1],
                easing: 'easeOutElastic(1, .8)',
                duration: 1800
            });
            anime({
                targets: '.aside-content nav ul li',
                translateX: [-60, 0],
                opacity: [0, 1],
                delay: anime.stagger(120, {
                    start: 600
                }),
                easing: 'easeOutExpo',
                duration: 1200
            });
            anime({
                targets: '#feed .feed-card',
                scale: [0.8, 1],
                opacity: [0, 1],
                delay: anime.stagger(180, {
                    start: 1200
                }),
                easing: 'easeOutBack',
                duration: 900
            });
            // BG animado
            anime({
                targets: '#bg-animado',
                opacity: [0, 0.18],
                duration: 2000,
                easing: 'easeInOutQuad'
            });
        });
    </script>

    <?php $render('aside', ['mostrarsugestoes' => false])?>

    <!-- CONTEÚDO DO MEIO PRINCIPAL -->
    <main>

        <div id="cards">
            <a href="#">
                <section class="card-comunidade nilopolis">
                    <h1 class="nome_cidades">Nilopolis</h1>
                    <div class="card-text">
                        <img class="user_face" src="<?=$base;?>/assets/images/bernardo.png" alt="">
                        <p>Problemas na comunidade de Nilópolis</p>
                    </div>
                </section>
            </a>

            <a href="#">
                <section class="card-comunidade anchieta">
                    <h1>Anchieta</h1>
                    <div class="card-text">
                        <img class="user_face" src="<?=$base;?>/assets/images/bernardo.png" alt="">
                        <p>Problemas na comunidade de Anchieta</p>
                    </div>
                </section>
            </a>
            <a href="#">
                <section class="card-comunidade copacabana">
                    <h1>Copacabana</h1>
                    <div class="card-text">
                        <img class="user_face" src="<?=$base;?>/assets/images/bernardo.png" alt="">
                        <p>Problemas na comunidade de Copacabana</p>
                    </div>
                </section>
            </a>
            <a href="#">
                <section class="card-comunidade deodoro">
                    <h1>Deodoro</h1>
                    <div class="card-text">
                        <img class="user_face" src="<?=$base;?>/assets/images/bernardo.png" alt="">
                        <p>Problemas na comunidade de Deodoro</p>
                    </div>
                </section>
            </a>
            <a href="#">
                <section class="card-comunidade ipanema">
                    <h1>Ipanema</h1>
                    <div class="card-text">
                        <img class="user_face" src="<?=$base;?>/assets/images/bernardo.png" alt="">
                        <p>Problemas na comunidade de Ipanema</p>
                    </div>
                </section>
            </a>
            <a href="#">
                <section class="card-comunidade realengo">
                    <h1>Realengo</h1>
                    <div class="card-text">
                        <img class="user_face" src="<?=$base;?>/assets/images/bernardo.png" alt="">
                        <p>Problemas na comunidade de Copacabana</p>
                    </div>
                </section>
            </a>
            <a href="#">
                <section class="card-comunidade novaiguacu">
                    <h1>Nova Iguaçu</h1>
                    <div class="card-text">
                        <img class="user_face" src="<?=$base;?>/assets/images/bernardo.png" alt="">
                        <p>Problemas na comunidade de Nova Iguaçu</p>
                    </div>
                </section>
            </a>
            <a href="#">
                <section class="card-comunidade bangu">
                    <h1>Bangu</h1>
                    <div class="card-text">
                        <img class="user_face" src="<?=$base;?>/assets/images/bernardo.png" alt="">
                        <p>Problemas na comunidade de Bangu</p>
                    </div>
                </section>
            </a>

            <a href="#">
                <section class="card-comunidade campo">
                    <h1>Campo Grande</h1>
                    <div class="card-text">
                        <img class="user_face" src="<?=$base;?>/assets/images/bernardo.png" alt="">
                        <p>Problemas na comunidade de Campo grande</p>
                    </div>
                </section>
            </a>

        </div>

    </main>

    <?php $render('footer-mobile');?>

</body>
</html>