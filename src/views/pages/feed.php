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
  <link rel="stylesheet" href="<?= $base; ?>/assets/css/modal.css">
  <link rel="stylesheet" href="<?= $base; ?>/assets/css/feed.css" />
  <link rel="stylesheet" href="<?= $base; ?>/assets/js/animacoes.css" />
  <style>
    .modal {
      display: none;
      position: fixed;
      z-index: 2000;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.6);
      justify-content: center;
      align-items: center;
    }

    .modal-content {
      background: #fff;
      border-radius: 12px;
      padding: 20px;
      width: 100%;
      max-width: 500px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
      animation: fadeInUp 0.3s ease;
    }

    .close-modal {
      float: right;
      font-size: 24px;
      cursor: pointer;
    }

    .modal h2 {
      margin-top: 0;
      margin-bottom: 15px;
    }

    .modal label {
      display: block;
      margin: 10px 0 5px;
    }

    .modal input,
    .modal textarea,
    .modal select {
      width: 100%;
      padding: 10px;
      border-radius: 8px;
      border: 1px solid #ccc;
    }

    .btn-publicar {
      margin-top: 15px;
      background: #0a66c2;
      color: #fff;
      padding: 12px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      width: 100%;
      font-weight: bold;
    }

    .btn-publicar:hover {
      background: #084a90;
    }
  </style>
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

  <?php $render("footer-mobile"); ?>

  <!-- CSS do modal -->
  <link rel="stylesheet" href="<?= $base; ?>/assets/js/modal-nova-reclamacao.css" />
  <script src="<?= $base; ?>/assets/js/modal-nova-reclamacao.js"></script>
  <script src="<?= $base; ?>/assets/js/notificacoes.js"></script>
</body>

</html>