<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="<?= $base; ?>/assets/images/logo_padrao.svg" type="image/x-icon" />
  <title>Quibble - Perfil</title>
  <link rel="stylesheet" href="<?= $base; ?>/assets/css/feed.css" />
  <link rel="stylesheet" href="<?= $base; ?>/assets/js/animacoes.css" />
  <link rel="stylesheet" href="<?= $base; ?>/assets/css/modal.css">
  <link rel="stylesheet" href="<?= $base; ?>/assets/js/modal-nova-reclamacao.css" />
  <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
  <script>
    const BASE = "<?= $base; ?>";
  </script>
  <!-- Anime.js CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
</head>

<body>
  <div id="bg-animado"></div>

  <?php $render("modal", [
    'usuario' => $loggedUser,
    'categorias' => isset($categorias) ? $categorias : []
  ]); ?>

  <script src="<?= $base ?>/assets/js/bloco-comentario.js"></script>

  <?php $render("aside", ['usuario' => $loggedUser]); ?>

  <main>
    <div id="feed">
      <div style="margin:0;" class="feed-filter-bar">
       

        <div style="margin:0;" class="filter-dropdown-right"></div>

        
      </div>

      <div style="margin:0;" id="feed-content">

        <div class="conteudo">
          <section class="config-container">
            <div class="configuracoes-alterar">
              <img src="<?= $base; ?>/assets/images/engrenagem.png" alt="">
              <h2>Configurações</h2>
            </div>
            <p>Gerencie suas preferências de conta e privacidade</p>

            <div class="tabs">
              <button class="tab active">Conta</button>
              <button class="tab">Notificações</button>
              <button class="tab">Privacidade</button>
              <button class="tab">Aparência</button>
            </div>

            <div class="card settings-card">
              <div class="configuracoes-alterar conta">
                <img src="<?= $base; ?>/assets/images/avatar.png" alt="">
                <h3>Configurações da Conta</h3>
              </div>

              <div class="profile-row">
                <div class="avatar-large">
                  <span>JS</span>
                </div>
                <div class="profile-actions">
                  <button class="btn">Alterar Foto</button>
                  <small>JPG, PNG ou GIF. Máximo 5MB.</small>
                </div>
              </div>

              <form method="POST" action="<?= $base; ?>/usuario/atualizar">
                <div class="form-grid">
                  <div class="form-group">
                    <label>Nome Completo</label>
                    <input type="text" name="nome" value="<?= htmlspecialchars($usuario->nome ?? '') ?>">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="<?= htmlspecialchars($usuario->email ?? '') ?>">
                  </div>

                  <div class="form-group full">
                    <label>Localização</label>
                    <input type="text" name="localizacao" value="<?= htmlspecialchars($usuario->localizacao ?? '') ?>">
                  </div>

                  <div class="form-group full">
                    <label>Biografia</label>
                    <textarea name="bio"><?= htmlspecialchars($usuario->bio ?? '') ?></textarea>
                  </div>
                </div>

                <hr>

                <h4>Alterar Senha</h4>
                <div class="form-grid">
                  <div class="form-group full">
                    <label>Senha Atual</label>
                    <input type="password" name="senha_atual">
                  </div>
                  <div class="form-group">
                    <label>Nova Senha</label>
                    <input type="password" name="nova_senha">
                  </div>
                  <div class="form-group">
                    <label>Confirmar Senha</label>
                    <input type="password" name="confirmar_senha">
                  </div>
                </div>

                <div class="actions">
                  <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                </div>
              </form>
            </div>
          </section>
        </div>

      </div>
    </div>
  </main>

  <?php $render("footer-mobile", ['usuario' => $loggedUser]); ?>

  <script src="<?= $base; ?>/assets/js/upvotes.js"></script>
  <script src="<?= $base; ?>/assets/js/modal-nova-reclamacao.js"></script>
  <script src="<?= $base; ?>/assets/js/notificacoes.js"></script>
  <script src="<?= $base; ?>/assets/js/comentarios.js"></script>
  <script src="<?= $base; ?>/assets/js/script.js"></script>
</body>

</html>