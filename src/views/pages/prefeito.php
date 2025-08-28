<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= $base ?>/assets/images/logo_padrao.svg" type="image/x-icon">
    <title>Quibble - Prefeito</title>
    <link rel="stylesheet" href="<?= $base ?>/assets/css/prefeito.css">
    <link rel="stylesheet" href="<?= $base ?>/assets/js/animacoes.css">
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <!-- Anime.js CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
</head>

<body onload=" alternarIcone();juntar();">

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

    <?php $render('aside'); ?>

    <div class="perfil-noticias">
        <main>
            <div id="perfil-feed">
                <div class="perfil-central">
                    <div class="card"></div>
                    <div class="foto-seguir">
                        <div class="descricao">
                            <div class="foto-perfil-central">
                                <img src="<?= $base ?>/assets/images/eduardopaes.jpg" alt="">
                            </div>
                            <div id="descricao-perfil">
                                <div class="nome-recado">
                                    <div class="nome-selo">
                                        <h1>Eduardo Paes</h1>
                                        <div class="selo-verificado">
                                            <img src="<?= $base ?>/assets/icons/seloverificado.svg" alt="">
                                        </div>
                                    </div>
                                    <span>Prefeito da cidade do <a href="">Rio de Janeiro</a></span>
                                </div>
                            </div>
                            <div class="avaliacao-geral">
                                <div class="estrelas">
                                    <i class='bxr  bxs-star' style='color:#DEA22A'></i>
                                </div>
                                <div class="estrelas">
                                    <i class='bxr  bxs-star' style='color:#DEA22A'></i>
                                </div>
                                <div class="estrelas">
                                    <i class='bxr  bxs-star' style='color:#DEA22A'></i>
                                </div>
                                <div class="estrelas">
                                    <i class='bxr  bxs-star' style='color:#DEA22A'></i>
                                </div>

                                <div class="estrelas">
                                    <i class='bxr  bxs-star-half' style='color:#DEA22A'></i>
                                </div>
                            </div>
                            <div class="avaliacao-sistema">
                                <div class="estrelas">
                                    <i class='bxr  bxs-star' style='color:#2B72DF'></i>
                                </div>
                                <div class="estrelas">
                                    <i class='bxr  bxs-star' style='color:#2B72DF'></i>
                                </div>
                                <div class="estrelas">
                                    <i class='bxr  bxs-star' style='color:#2B72DF'></i>
                                </div>
                                <div class="estrelas">
                                    <i class='bxr  bxs-star' style='color:#2B72DF'></i>
                                </div>
                                <div class="estrelas">
                                    <i class='bxr  bxs-star-half' style='color:#2B72DF'></i>
                                </div>
                            </div>
                            <div class="informacoes">
                                <div class="info-adc m">
                                    <i class='bx  bxs-location'></i>
                                    <span>RJ - Rio de Janeiro</span>
                                </div>
                                <div class="info-adc">
                                    <i class='bx  bxs-calendar-alt'></i>
                                    <span>Usuário desde outubro 2020</span>
                                </div>
                            </div>
                        </div>
                        <div class="seguir">
                            <i class='  bx  bx-dots-horizontal-rounded'></i>
                            <i class='  bx  bx-share'></i>
                            <button class="btnicone"><i class=' bx  bx-bell'></i></button>
                            <button id="btnseguir">Seguir</button>
                        </div>
                    </div>
                </div>
                <div class="filtros">
                    <ul>
                        <li><a href="">Reclamações <span id="texto-adc">Recentes</span></a></li>
                        <li id="selecionado"><a href="">Upvotes</a></li>
                        <li><a href="comunidade.html">Comunidades</a></li>
                    </ul>
                </div>
                <div id="feed">
                    <div id="feed-content">
                        <div class="feed-card">
                            <div class="feed-card-content-feedback mobile">
                                <div class="feedback-upvote">
                                    <img src="<?= $base ?>/assets/images/upvote.svg" alt="">
                                    2,5 mil
                                </div>
                                <div class="feedback-comment">
                                    <img src="<?= $base ?>/assets/images/comentario.svg" alt="">
                                    194
                                </div>
                                <div class="feedback-share">
                                    <img src="<?= $base ?>/assets/images/compartilhar.svg" alt="">
                                    Compartilhar
                                </div>
                            </div>
                            <img src="<?= $base ?>/assets/images/feed.png" alt="">
                            <div class="feed-card-content">
                                <div class="feed-card-content-text">
                                    <img src="<?= $base ?>/assets/images/bernardo.png" alt="">
                                    <div class="feed-card-content-text-area">
                                        <h5>Bernardo Cota</h5>
                                        <p>Buraco em Rua A tá atrapalhando a passagem da população, completo descaso com o trabalhador...</p>
                                    </div>
                                </div>
                                <div class="feed-card-content-feedback">
                                    <div class="feedback-upvote">
                                        <img src="<?= $base ?>/assets/images/upvote.svg" alt="">
                                        2,5 mil
                                    </div>
                                    <div class="feedback-comment">
                                        <img src="<?= $base ?>/assets/images/comentario.svg" alt="">
                                        194
                                    </div>
                                    <div class="feedback-share">
                                        <img src="<?= $base ?>/assets/images/compartilhar.svg" alt="">
                                        Compartilhar
                                    </div>
                                </div>
                            </div>
                        </div>
        </main>
    </div>

    <?php $render("footer-mobile"); ?>
    <script src="<?= $base ?>/assets/js/script.js"></script>
</body>

</html>