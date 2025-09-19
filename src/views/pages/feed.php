<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="shortcut icon"
    href="<?= $base; ?>/assets/images/logo_padrao.svg"
    type="image/x-icon" />
  <title>Quibble</title>
  <link rel="stylesheet" href="<?= $base; ?>/assets/css/feed.css" />
  <link rel="stylesheet" href="<?= $base; ?>/assets/js/animacoes.css" />
  <link rel="stylesheet" href="<?= $base; ?>/assets/css/modal.css">
  <script>
    const BASE = "<?= $base; ?>";
  </script>
  <!-- Anime.js CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
</head>

<body>
  <div id="bg-animado"></div>

  <!-- MODAL NOVA RECLAMACAO ESTILO TWITTER/X -->
  <?php $render("modal", [
    'usuario' => $loggedUser,
    'categorias' => $categorias
  ]); ?>


  <!-- ANIMAÇÃO DE ENTRADA DO LOGO -->
  <script src="<?= $base ?>/assets/js/bloco-comentario.js"></script>

  <?php $render("aside", ['usuario' => $loggedUser]); ?>

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
        <?php if (!empty($reclamacoes)): ?>
          <?php foreach ($reclamacoes as $reclamacao): ?>
            <?php $render("feed-card", [
              'reclamacao' => $reclamacao, 
              'loggedUser' => $loggedUser
              ]); ?>
          <?php endforeach; ?>
        <?php else: ?>
          <p>Nenhuma reclamação encontrada.</p>
        <?php endif; ?>
      </div>
    </div>
  </main>

  <!-- FOOTER (SÓ APARECE NO MOBILE)-->

  <?php $render("footer-mobile", ['usuario' => $loggedUser]); ?>

  <!-- CSS do modal -->
  <link rel="stylesheet" href="<?= $base; ?>/assets/js/modal-nova-reclamacao.css" />
  <script src="<?= $base;?>/assets/js/upvotes.js"></script>
  <script src="<?= $base; ?>/assets/js/modal-nova-reclamacao.js"></script>
  <script src="<?= $base; ?>/assets/js/notificacoes.js"></script>
</body>

</html>