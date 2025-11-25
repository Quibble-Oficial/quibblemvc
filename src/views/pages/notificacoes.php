<?php
// HELPER PARA FORMATAR TEMPO (Ex: 2h, 5d)
function tempo_corrido($datetime)
{
    $now = new DateTime();
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    if ($diff->d > 7) return $ago->format('d/m');
    if ($diff->d > 0) return $diff->d . 'd';
    if ($diff->h > 0) return $diff->h . 'h';
    if ($diff->i > 0) return $diff->i . 'm';
    return 'agora';
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= $base; ?>/assets/images/logo_padrao.svg" type="image/x-icon">
    <title>Notificações - Quibble</title>
    <link rel="stylesheet" href="<?= $base; ?>/assets/css/feed.css">
    <link rel="stylesheet" href="<?= $base; ?>/assets/css/notificacoes.css">
    <link rel="stylesheet" href="<?= $base; ?>/assets/js/animacoes.css">
    <!-- Anime.js CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
</head>

<body>
    <div id="bg-animado"></div>

    <!-- ANIMAÇÃO DE ENTRADA -->
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
                targets: '.notification-item',
                scale: [0.95, 1],
                opacity: [0, 1],
                delay: anime.stagger(100, {
                    start: 1000
                }),
                easing: 'easeOutBack',
                duration: 600
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

    <?php $render('aside', ['mostrarsugestoes' => false, 'usuario' => $loggedUser]) ?>

    <!-- CONTEÚDO PRINCIPAL -->
    <main>
        <div id="notificacoes-container">
            
            <div class="notification-tabs">
                <button class="tab-btn active" data-tab="novo">
                    Novo <?php if(count($novas) > 0): ?><span style="color:var(--azul-primario); font-size:0.8em;">(<?=count($novas);?>)</span><?php endif; ?>
                </button>
                <button class="tab-btn" data-tab="tudo">Tudo</button>
            </div>

            <div class="notifications-content">

                <div class="tab-content" id="tudo">
                    <?php if (empty($todas)): ?>
                        <div style="padding:40px; text-align:center; color:#999;">Você não tem notificações.</div>
                    <?php else: ?>
                        <?php foreach($todas as $notif): 
                            $tipoConfig = getNotifConfig($notif['tipo'], $base);
                            $classeLida = ($notif['lida']) ? 'read' : 'unread';
                        ?>
                            <div class="notification-item <?= $classeLida; ?>" data-id="<?=$notif['notificacao_id'];?>">
                                <div class="notification-avatar">
                                    <img src="<?= $base ?>/assets/images/secretaria.jpg" alt="Avatar">
                                    <div class="notification-badge <?= $tipoConfig['badge']; ?>"></div>
                                </div>
                                <div class="notification-content">
                                    <div class="notification-header">
                                        <span class="notification-source"><?= $tipoConfig['source']; ?></span>
                                        <span class="notification-time"><?= tempo_corrido($notif['criado_em']); ?></span>
                                    </div>
                                    <div class="notification-text">
                                        <?= htmlspecialchars($notif['conteudo']); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </main>

    <!-- FOOTER MOBILE -->
    <?php $render("footer-mobile"); ?>

    <script src="<? $base; ?>/assets/js/script.js"></script>
    <script>
        // Funcionalidade das abas (Mantida)
        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const tabId = this.getAttribute('data-tab');
                document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
                document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));
                this.classList.add('active');
                document.getElementById(tabId).classList.add('active');
            });
        });

        // AJAX: Marcar notificação como lida ao clicar
        document.querySelectorAll('.notification-item.unread').forEach(item => {
            item.addEventListener('click', async function() {
                // Remove visualmente a classe unread
                this.classList.remove('unread');
                this.classList.add('read');

                const id = this.getAttribute('data-id');

                // Envia requisição para o backend marcar como lida
                try {
                    const formData = new FormData();
                    formData.append('id', id);
                    // Supondo que você tenha uma rota /notificacao/ler
                    await fetch('<?= $base; ?>/notificacao/ler', {
                        method: 'POST',
                        body: formData
                    });
                } catch (e) {
                    console.log("Erro ao marcar notificação");
                }
            });
        });

        // Animação de entrada ao trocar de aba
        function animateNotifications() {
            anime({
                targets: '.notification-item',
                translateX: [-30, 0],
                opacity: [0, 1],
                delay: anime.stagger(100),
                easing: 'easeOutExpo',
                duration: 600
            });
        }
        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                setTimeout(animateNotifications, 100);
            });
        });

        // Funcionalidade das abas
        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const tabId = this.getAttribute('data-tab');

                // Remove active de todas as abas e conteúdos
                document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
                document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));

                // Adiciona active na aba clicada e seu conteúdo
                this.classList.add('active');
                document.getElementById(tabId).classList.add('active');
            });
        });

        // Marcar notificação como lida ao clicar
        document.querySelectorAll('.notification-item').forEach(item => {
            item.addEventListener('click', function() {
                this.classList.remove('unread');
                this.classList.add('read');

                // Atualizar contador de notificações
                const unreadCount = document.querySelectorAll('.notification-item.unread').length;
                const notificationBadge = document.getElementById('notificacoes-qtd');
                if (unreadCount > 0) {
                    notificationBadge.textContent = unreadCount;
                } else {
                    notificationBadge.style.display = 'none';
                }
            });
        });

        // Animação de entrada das notificações
        function animateNotifications() {
            anime({
                targets: '.notification-item',
                translateX: [-30, 0],
                opacity: [0, 1],
                delay: anime.stagger(100),
                easing: 'easeOutExpo',
                duration: 600
            });
        }

        // Executar animação quando trocar de aba
        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                setTimeout(animateNotifications, 100);
            });
        });
    </script>
</body>

</html>

<?php
// CONFIGURAÇÃO VISUAL DOS ÍCONES (Coloque isso no início do arquivo ou num Helper)
function getNotifConfig($tipo, $base)
{
    switch ($tipo) {
        case 'resolucao':
            return [
                'badge' => 'official', // CSS: Azul
                'img' => $base . '/assets/images/brasao_prefeitura.png', // Use um ícone de prefeitura
                'source' => 'Atualização Oficial'
            ];
        case 'aviso':
            return [
                'badge' => 'verified', // CSS: Verde
                'img' => $base . '/assets/images/logo_padrao.svg',
                'source' => 'Sistema Quibble'
            ];
        case 'interacao':
            return [
                'badge' => 'user', // CSS: Rosa/Coração
                'img' => $base . '/assets/images/avatars/default.png', // Idealmente seria a foto de quem curtiu
                'source' => 'Interação'
            ];
        case 'comunidade':
            return [
                'badge' => 'community', // CSS: Amarelo
                'img' => $base . '/assets/images/cidade.png',
                'source' => 'Sua Comunidade'
            ];
        default:
            return ['badge' => 'verified', 'img' => $base . '/assets/images/logo_padrao.svg', 'source' => 'Quibble'];
    }
}
?>