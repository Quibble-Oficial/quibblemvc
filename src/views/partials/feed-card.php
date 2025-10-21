
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
    <span class="tag">Infraestrutura</span>
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
            <span><?= $reclamacao['total_upvotes']; ?></span>
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
</div>
</div>
