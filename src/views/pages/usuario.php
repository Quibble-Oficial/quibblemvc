<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= $base; ?>/assets/images/logo_padrao.svg" type="image/x-icon">
    <title>Quibble - Perfil</title>
    <link rel="stylesheet" href="<?= $base; ?>/assets/css/feed.css">
    <link rel="stylesheet" href="<?= $base; ?>/assets/js/animacoes.css">
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

    <?php $render('aside', ['usuario' => $loggedUser]) ?>

    <div class="perfil-noticias" style="min-width: 60%; margin-bottom: 20px;" >
        <main>
            <div class="card-perfil">
                <img src="<?= $base; ?>/assets/uploads/avatars/<?= $usuario->foto_perfil ?? 'default.png'; ?>" alt="" style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%;">


                <div class="descricao-perfil">
                    <div class="nome-botao">
                        <h1><?= $usuario->nome; ?></h1>
                        <?php if ($mesmoUsuario): ?>
                            <a href="<?= $base; ?>/alterar-usuario">
                                <img src="<?= $base; ?>/assets/images/edit.svg" alt="">
                                Editar Perfil
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="localizacao-membro">
                        <div class="local">
                            <img src="<?= $base; ?>/assets/images/local.svg" alt="">
                            <span>Centro - Mesquita</span>
                        </div>
                        <div class="membro">
                            <img src="<?= $base; ?>/assets/images/calendar.svg" alt="">
                            <span>Membro desde <?= date('F Y', strtotime($usuario->criado_em)); ?></span>
                        </div>
                    </div>

                    <p class="descricao-bio"><?= htmlspecialchars($usuario->bio); ?></p>
                    <div class="estatisticas-perfil">
                        <div class="estatistic postagens">
                            <span><?= $stats['reclamacoes'] ?? 0; ?></span>
                            <p>Postagens</p>
                        </div>
                        <div class="estatistic curtidas">
                            <span><?= $stats['upvotes'] ?? 0; ?></span>
                            <p>Upvotes</p>
                        </div>
                        <div class="estatistic comentarios">
                            <span><?= $stats['comentarios'] ?? 0; ?></span>
                            <p>Comentários</p>
                        </div>
                        <div class="estatistic seguidores">
                            <span><?= $stats['seguidores'] ?? 0; ?></span>
                            <p>Seguidores</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="filtro-perfil">
                <a class="links minhas-postagens" href="">Minhas Postagens</a>
                <!-- <a class="links interacoes" href="">Interações</a>   
            <a class="links comunidades" href="">Comunidades</a>   -->
            </div>
        </main>
    </div>
    <?php if (!empty($feedUsuario)): ?>
        <?php foreach ($feedUsuario as $reclamacao): ?>

            <?php $render("feed-card", [
                'reclamacao' => $reclamacao,
                'loggedUser' => $loggedUser
            ]); ?>

        <?php endforeach; ?>
    <?php else: ?>
        <p>Este usuário ainda não fez nenhuma reclamação.</p>
    <?php endif; ?>

    <?php $render("footer-mobile", ['usuario' => $loggedUser]); ?>

    <script src="<?= $base; ?>/assets/js/script.js"></script>
</body>

</html>