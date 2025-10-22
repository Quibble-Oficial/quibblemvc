<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?=$base;?>/assets/images/logo_padrao.svg" type="image/x-icon">
    <title>Quibble - Perfil</title>
    <link rel="stylesheet" href="<?=$base;?>/assets/css/feed.css">
    <link rel="stylesheet" href="<?=$base;?>/assets/js/animacoes.css">
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <script>
    const BASE = "<?= $base; ?>";
    const id_usuario = "<?= $loggedUser->usuario_id; ?>";
    </script>
    <!-- Anime.js CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
</head>

<body onload="  alternarIcone();juntar();">

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

    <?php $render('aside', ['usuario' => $loggedUser])?>

    <div class="perfil-noticias">
        <main>
           <div class="card-perfil">
            <div class="foto-user">
                <h1>JS</h1>
                <img src="" alt="">
            </div>

            <div class="descricao-perfil">
                <div class="nome-botao">
                    <h1><?=$usuario->nome;?></h1>
                    <a href="<?=$base;?>/alterar-usuario">
                        <img src="<?= $base; ?>/assets/images/edit.svg" alt="">
                        Editar Perfil
                    </a>
                </div>
                <div class="localizacao-membro">
                    <div class="local">
                        <img src="<?= $base; ?>/assets/images/local.svg" alt="">
                        <span>Bairro - RJ</span>
                    </div>
                    <div class="membro">
                        <img src="<?= $base; ?>/assets/images/calendar.svg" alt="">
                        <span>Membro desde Janeiro 2024</span>
                    </div>
                </div>

                <p class="descricao-bio">Morador preocupado com a qualidade de vida na cidade. Sempre atento aos problemas do bairro.</p>
                <div class="estatisticas-perfil">
                    <div class="estatistic postagens">
                        <span>12</span>
                        <p>Postagens</p>
                    </div>
                    <div class="estatistic curtidas">
                        <span>89</span>
                        <p>Curtidas</p>
                    </div>
                    <div class="estatistic comentarios">
                        <span>156</span>
                        <p>Comentários</p>
                    </div>
                    <div class="estatistic seguidores">
                        <span>34</span>
                        <p>Seguidores</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="filtro-perfil">
            <a class="links minhas-postagens" href="">Minhas Postagens</a>
            <a class="links interacoes" href="">Interações</a>   
            <a class="links comunidades" href="">Comunidades</a>  
        </div>
        </main>
    </div>

    <?php $render("footer-mobile", ['usuario' => $loggedUser]);?>
    
    <script src="<?=$base;?>/assets/js/script.js"></script>
</body>

</html>