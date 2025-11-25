<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?=$base;?>/assets/images/logo_padrao.svg" type="image/x-icon">
    <title>Notificações - Quibble</title>
    <link rel="stylesheet" href="<?=$base;?>/assets/css/feed.css">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/notificacoes.css">
    <link rel="stylesheet" href="<?=$base;?>/assets/js/animacoes.css">
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
          delay: anime.stagger(120, {start: 600}),
          easing: 'easeOutExpo',
          duration: 1200
        });
        anime({
          targets: '.notification-item',
          scale: [0.95, 1],
          opacity: [0, 1],
          delay: anime.stagger(100, {start: 1000}),
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

    <?php $render('aside', ['mostrarsugestoes' => false , 'usuario' => $loggedUser])?>

    <!-- CONTEÚDO PRINCIPAL -->
    <main>
        <div id="notificacoes-container">
            <!-- ABAS DE FILTRO -->
            <div class="notification-tabs">
                <button class="tab-btn active" data-tab="novo">Novo</button>
                <button class="tab-btn" data-tab="tudo">Tudo</button>
            </div>

            <!-- CONTEÚDO DAS NOTIFICAÇÕES -->
            <div class="notifications-content">
                <!-- ABA NOVO -->
                <div class="tab-content active" id="novo">
                    <div class="notification-item unread">
                        <div class="notification-avatar">
                            <img src="<?=$base;?>/assets/images/eduardopaes.jpg" alt="Águas do Rio">
                            <div class="notification-badge official"></div>
                        </div>
                        <div class="notification-content">
                            <div class="notification-header">
                                <span class="notification-source">Águas do Rio</span>
                                <span class="notification-time">2h</span>
                            </div>
                            <div class="notification-text">
                                Estamos no processo de solução do seu problema...
                            </div>
                        </div>
                    </div>

                    <div class="notification-item unread">
                        <div class="notification-avatar">
                            <img src="<?=$base;?>/assets/images/crivela.jpg" alt="Marcelo Crivela">
                            <div class="notification-badge verified"></div>
                        </div>
                        <div class="notification-content">
                            <div class="notification-header">
                                <span class="notification-source">Marcelo Crivela</span>
                                <span class="notification-time">4h</span>
                            </div>
                            <div class="notification-text">
                                comentou na sua reclamação: Foi enviado ao devido setor...
                            </div>
                        </div>
                    </div>

                    <div class="notification-item unread">
                        <div class="notification-avatar">
                            <img src="<?=$base;?>/assets/images/cidade.png" alt="Comunidade Nilópolis">
                            <div class="notification-badge community"></div>
                        </div>
                        <div class="notification-content">
                            <div class="notification-header">
                                <span class="notification-source">Comunidade Nilópolis</span>
                                <span class="notification-time">6h</span>
                            </div>
                            <div class="notification-text">
                                Fernanda comentou: Barulho de obra na rua e eu querendo dormir...
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ABA TUDO -->
                <div class="tab-content" id="tudo">
                    <div class="notification-item unread">
                        <div class="notification-avatar">
                            <img src="<?=$base;?>/assets/images/eduardopaes.jpg" alt="Águas do Rio">
                            <div class="notification-badge official"></div>
                        </div>
                        <div class="notification-content">
                            <div class="notification-header">
                                <span class="notification-source">Águas do Rio</span>
                                <span class="notification-time">2h</span>
                            </div>
                            <div class="notification-text">
                                Estamos no processo de solução do seu problema...
                            </div>
                        </div>
                    </div>

                    <div class="notification-item unread">
                        <div class="notification-avatar">
                            <img src="<?=$base;?>/assets/images/crivela.jpg" alt="Marcelo Crivela">
                            <div class="notification-badge verified"></div>
                        </div>
                        <div class="notification-content">
                            <div class="notification-header">
                                <span class="notification-source">Marcelo Crivela</span>
                                <span class="notification-time">4h</span>
                            </div>
                            <div class="notification-text">
                                comentou na sua reclamação: Foi enviado ao devido setor...
                            </div>
                        </div>
                    </div>

                    <div class="notification-item unread">
                        <div class="notification-avatar">
                            <img src="<?=$base;?>/assets/images/cidade.png" alt="Comunidade Nilópolis">
                            <div class="notification-badge community"></div>
                        </div>
                        <div class="notification-content">
                            <div class="notification-header">
                                <span class="notification-source">Comunidade Nilópolis</span>
                                <span class="notification-time">6h</span>
                            </div>
                            <div class="notification-text">
                                Fernanda comentou: Barulho de obra na rua e eu querendo dormir...
                            </div>
                        </div>
                    </div>

                    <div class="notification-item read">
                        <div class="notification-avatar">
                            <img src="<?=$base;?>/assets/images/rogerio.jpg" alt="Prefeito Rogério">
                            <div class="notification-badge verified"></div>
                        </div>
                        <div class="notification-content">
                            <div class="notification-header">
                                <span class="notification-source">Prefeito Rogério</span>
                                <span class="notification-time">1d</span>
                            </div>
                            <div class="notification-text">
                                respondeu sua reclamação sobre iluminação pública
                            </div>
                        </div>
                    </div>

                    <div class="notification-item read">
                        <div class="notification-avatar">
                            <img src="<?=$base;?>/assets/images/bernardo.png" alt="João Silva">
                            <div class="notification-badge user"></div>
                        </div>
                        <div class="notification-content">
                            <div class="notification-header">
                                <span class="notification-source">João Silva</span>
                                <span class="notification-time">2d</span>
                            </div>
                            <div class="notification-text">
                                curtiu sua reclamação sobre transporte público
                            </div>
                        </div>
                    </div>

                    <div class="notification-item read">
                        <div class="notification-avatar">
                            <img src="<?=$base;?>/assets/images/cidade.png" alt="Comunidade Bangu">
                            <div class="notification-badge community"></div>
                        </div>
                        <div class="notification-content">
                            <div class="notification-header">
                                <span class="notification-source">Comunidade Bangu</span>
                                <span class="notification-time">3d</span>
                            </div>
                            <div class="notification-text">
                                Nova reclamação sobre coleta de lixo na sua região
                            </div>
                        </div>
                    </div>

                    <div class="notification-item read">
                        <div class="notification-avatar">
                            <img src="<?=$base;?>/assets/images/eduardopaes.jpg" alt="Eduardo Paes">
                            <div class="notification-badge verified"></div>
                        </div>
                        <div class="notification-content">
                            <div class="notification-header">
                                <span class="notification-source">Eduardo Paes</span>
                                <span class="notification-time">5d</span>
                            </div>
                            <div class="notification-text">
                                fez reforma prévia na zona sul do Rio de Janeiro
                            </div>
                        </div>
                    </div>

                    <div class="notification-item read">
                        <div class="notification-avatar">
                            <img src="<?=$base;?>/assets/images/bernardo.png" alt="Maria Santos">
                            <div class="notification-badge user"></div>
                        </div>
                        <div class="notification-content">
                            <div class="notification-header">
                                <span class="notification-source">Maria Santos</span>
                                <span class="notification-time">1sem</span>
                            </div>
                            <div class="notification-text">
                                comentou: "Também estou com esse problema!"
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- FOOTER MOBILE -->
    <?php $render("footer-mobile");?>

    <script src="<?$base;?>/assets/js/script.js"></script>
    <script>

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

