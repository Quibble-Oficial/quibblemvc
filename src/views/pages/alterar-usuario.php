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
                <img src="<?= $base; ?>/assets/images/avatars/<?= $loggedUser->foto_perfil ?? 'default.png'; ?>" class="avatar-small-icon" alt="">
                <h3>Configurações da Conta</h3>
              </div>

              <form method="POST" action="<?= $base; ?>/alterar-usuario" enctype="multipart/form-data">

                <div class="profile-row">
                  <div class="avatar-large">
                    <img id="avatar-preview" src="<?= $base; ?>/assets/uploads/avatars/<?= $loggedUser->foto_perfil ?? 'default.png'; ?>" style="width:100%; height:100%; object-fit:cover; border-radius:50%;">
                  </div>
                  <div class="profile-actions">
                    <input type="file" name="avatar" id="avatarField" style="display: none;" accept="image/png, image/jpeg, image/jpg">

                    <button type="button" class="btn" onclick="document.getElementById('avatarField').click()">Alterar Foto</button>
                    <small>JPG ou PNG. Máximo 5MB.</small>
                  </div>
                </div>

                <div class="form-grid">
                  <div class="form-group">
                    <label>Nome Completo</label>
                    <input type="text" name="nome" value="<?= htmlspecialchars($loggedUser->nome); ?>" required>
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="<?= htmlspecialchars($loggedUser->email); ?>" required>
                  </div>

                  <div class="form-group full">
                    <label>Biografia</label>
                    <textarea name="bio"><?= htmlspecialchars($loggedUser->bio); ?></textarea>
                  </div>

                  <!-- <div class="form-group full">
                     <label>Nova Senha (Deixe em branco para manter)</label>
                     <input type="password" name="senha">
                  </div>
                  <div class="form-group full">
                     <label>Confirmar Nova Senha</label>
                     <input type="password" name="confirmar_senha">
                  </div> -->

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

  <script>
    document.getElementById('avatarField').addEventListener('change', function(e) {
      if (e.target.files && e.target.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          document.getElementById('avatar-preview').src = e.target.result;
        }
        reader.readAsDataURL(e.target.files[0]);
      }
    });
  </script>

  <script src="<?= $base; ?>/assets/js/upvotes.js"></script>
  <script src="<?= $base; ?>/assets/js/modal-nova-reclamacao.js"></script>
  <script src="<?= $base; ?>/assets/js/notificacoes.js"></script>
  <script src="<?= $base; ?>/assets/js/comentarios.js"></script>
  <script src="<?= $base; ?>/assets/js/script.js"></script>
</body>

</html>