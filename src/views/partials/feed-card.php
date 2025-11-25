<div class="feed-card">
  <div class="feed-card-header">
    <a href="<?= $base; ?>/usuario/<?= $reclamacao['usuario_id']; ?>" class="user-info-link" style="display: flex; align-items: center; text-decoration: none; color: inherit;">
      <img class="user-avatar" src="<?= $base; ?>/assets/uploads/avatars/<?= $reclamacao['usuario_foto'] ?? 'default.png'; ?>" alt="">
      <div class="user-info">
        <h5><?= htmlspecialchars($reclamacao['usuario_nome']); ?></h5>
        <span class="user-location">Santa Terezinha • 2h</span>
      </div>
    </a>
    <button class="more-btn">...</button>
  </div>

  <div class="feed-card-body">
    <div class="title-tag">
      <h4><?= htmlspecialchars($reclamacao['titulo'] ?? 'Título da reclamação'); ?></h4>
      <span class="tag"><?= htmlspecialchars($reclamacao['categoria_nome'] ?? 'Título da reclamação'); ?></span>
    </div>
    <p><?= htmlspecialchars($reclamacao['descricao']); ?></p>


    <?php if (!empty($reclamacao['midia'])): ?>
      <img class="post-image" src="<?= $base; ?>/<?= $reclamacao['midia']; ?>" alt="Imagem da reclamação">
    <?php endif; ?>

    <div class="feed-location">
      <img src="<?= $base; ?>/assets/images/local.svg" alt="">
      <span><?= htmlspecialchars($reclamacao['endereco'] ?? 'Rua Estela 433 - Mesquita'); ?></span>
    </div>
  </div>

  <hr>

  <div class="feed-card-footer">
    <div class="feedback-upvote" data-id="<?= $reclamacao['reclamacao_id']; ?>">
      <img src="<?= $base; ?>/assets/images/gostar.png" alt="">
      <span class="upvote-count"><?= $reclamacao['total_upvotes']; ?></span>
    </div>
    <div class="feedback-comment">
      <img src="<?= $base; ?>/assets/images/comentario.svg" alt="">
      <span><?= $reclamacao['total_comentarios'] ?? 0; ?></span>
    </div>
    <div class="feedback-share">
      <img src="<?= $base; ?>/assets/images/compartilhar.svg" alt="">
      Compartilhar
    </div>
  </div>

  <!-- comentar -->
  <div class="comment-area" data-reclamacao-id="<?= $reclamacao['reclamacao_id']; ?>" style="display: none;">

    <div class="comment-input">
      <img class="comment-avatar" src="<?= $base; ?>/assets/uploads/avatars/<?= $usuario->foto_perfil ?? 'default.png' ?>" alt="Avatar">

      <input
        type="text"
        class="comment-input-field"
        data-reclamacao-id="<?= $reclamacao['reclamacao_id']; ?>"
        placeholder="Postar resposta">
      <button
        class="post-comment-btn"
        data-reclamacao-id="<?= $reclamacao['reclamacao_id']; ?>">
        Enviar
      </button>
    </div>

    <div class="comments-list">
    </div>

  </div>
</div>
</div>
</div>
</div>