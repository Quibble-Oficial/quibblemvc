
<div class="feed-card">
  <div class="feed-card-header">
    <img class="user-avatar" src="<?= $base; ?>/assets/images/bernardo.png" alt="">
    <div class="user-info">
      <h5><?= htmlspecialchars($reclamacao['usuario_nome']); ?></h5>
      <span class="user-location">Vila Madalena, SP • 2h</span>
    </div>
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
          <img class="user-avatar" src="<?= $base; ?>/assets/images/mapas-e-bandeiras.png" alt="">
          <span><?= htmlspecialchars($reclamacao['endereco'] ?? 'Rua quaresma 17- Marechal Hermes'); ?></span>
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
    <div class="comment-area">
      <div class="comment-input">
        <img class="comment-avatar" src="<?= $base; ?>/assets/images/bernardo.png" alt="">
        <input type="text" id="commentText" placeholder="Postar resposta">
        <button id="commentSend">Enviar</button>
      </div>

      <!-- respostas -->
      <div class="comment-info">
        <div class="feed-card-header">
          <img class="user-avatar" src="<?= $base; ?>/assets/images/bernardo.png" alt="">
          <div class="user-info">
            <h5><?= htmlspecialchars($reclamacao['usuario_nome']); ?></h5>
            <span class="user-location">Vila Madalena, SP • 2h</span>
          </div>
          <button class="more-btn">...</button>
        </div>
        <p>O semáforo do cruzamento da Av. Paulista com Rua da Consolação está com defeito há 2 dias.</p>
      </div>

      <div class="comment-info">
        <div class="feed-card-header">
          <img class="user-avatar" src="<?= $base; ?>/assets/images/bernardo.png" alt="">
          <div class="user-info">
            <h5><?= htmlspecialchars($reclamacao['usuario_nome']); ?></h5>
            <span class="user-location">Vila Madalena, SP • 2h</span>
          </div>
          <button class="more-btn">...</button>
        </div>
        <p>O semáforo do cruzamento da Av. Paulista com Rua da Consolação está com defeito há 2 dias.</p>
      </div>
    </div>
  </div>
</div>
</div>
</div>

