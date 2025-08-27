<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="<?=$base;?>/assets/images/logo_padrao.svg"
      type="image/x-icon"
    />
    <title>Quibble</title>
    <link rel="stylesheet" href="<?=$base;?>/assets/css/modal.css">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/feed.css" />
    <link rel="stylesheet" href="<?=$base;?>/assets/js/animacoes.css" />
    <!-- Anime.js CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
  </head>
  <body>
    <div id="bg-animado"></div>

    <!-- MODAL NOVA RECLAMACAO ESTILO TWITTER/X -->
    <?php $render("modal");?>

    <!-- ANIMAÇÃO DE ENTRADA DO LOGO -->
    <script src="<?=$base?>/assets/js/bloco-comentario.js"></script>

    <?php $render("aside");?>

    <!-- CONTEÚDO DO MEIO PRINCIPAL -->
    <main>
      <div id="feed">
        <!-- ESSE FILTER SOME NO MOBILE -->
        <div id="feed-filter">
          <div class="feed-filter-item">Mobilidade</div>
          <div class="feed-filter-item">Educação</div>
          <div class="feed-filter-item">Saúde</div>
          <div class="feed-filter-item">Defesa Civil</div>
          <div class="feed-filter-item active">Infraestrutura</div>
          <div class="feed-filter-item">Segurança</div>
          <div class="feed-filter-item">Postura Urbana</div>
        </div>
        <div id="feed-content">
          <div class="feed-card feed-card-gabriel-souza-fixa">
            <div class="feed-card-content-feedback mobile">
              <div class="feedback-upvote">
                <img src="<?=$base;?>/assets/images/upvote.svg" alt="" />
                1 mil
              </div>
              <div class="feedback-comment">
                <img src="<?=$base;?>/assets/images/comentario.svg" alt="" />
                2
              </div>
              <div class="feedback-share">
                <img src="<?=$base;?>/assets/images/compartilhar.svg" alt="" />
                Compartilhar
              </div>
            </div>
            <img src="<?=$base;?>/assets/images/feed.png" alt="" />
            <div class="feed-card-content">
              <div class="feed-card-content-text">
                <img src="<?=$base;?>/assets/images/souza.png" alt="" />
                <div class="feed-card-content-text-area">
                  <h5>Gabriel Souza</h5>
                  <p>
                    Buraco em Rua A tá atrapalhando a passagem da população,
                    completo descaso com o trabalhador...
                  </p>
                </div>
              </div>
              <div class="feed-card-content-feedback">
                <div class="feedback-upvote">
                  <img src="<?=$base;?>/assets/images/upvote.svg" alt="" />
                  1 mil
                </div>
                <div class="feedback-comment">
                  <img src="<?=$base;?>/assets/images/comentario.svg" alt="" />
                  2
                </div>
                <div class="feedback-share">
                  <img src="<?=$base;?>/assets/images/compartilhar.svg" alt="" />
                  Compartilhar
                </div>
              </div>
            </div>
            <!-- Bloco de comentários oculto por padrão -->
            <div
              class="feed-comments-block-gabriel-souza-fixa"
              style="display: none"
            ></div>
          </div>
        </div>
      </div>
    </main>

    <!-- FOOTER (SÓ APARECE NO MOBILE)-->

    <footer>
      <a href="index.html"
        ><img src="<?=$base;?>/assets/images/home_mobile.svg" alt=""
      /></a>
      <a href="perfil.html"
        ><img src="<?=$base;?>/assets/images/perfil_mobile.svg" alt=""
      /></a>
      <a href="notificacoes.html"
        ><img src="<?=$base;?>/assets/images/sino_mobile.svg" alt=""
      /></a>
      <a href="comunidade.html"
        ><img src="<?=$base;?>/assets/images/comunidade_mobile.svg" alt=""
      /></a>
      <a href="mapa.html"
        ><img src="<?=$base;?>/assets/images/ponteiro_mobile.svg" alt=""
      /></a>
      <a href="prefeitos.html"
        ><img src="<?=$base;?>/assets/images/tribunal_mobile.svg" alt=""
      /></a>
    </footer>

    <!-- CSS do modal -->
    <link rel="stylesheet" href="<?=$base;?>/assets/js/modal-nova-reclamacao.css" />
    <script src="<?=$base;?>/assets/js/modal-nova-reclamacao.js"></script>
  </body>
</html>
