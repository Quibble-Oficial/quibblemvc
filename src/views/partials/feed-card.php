<div class="feed-card">
    <div class="feed-card-content-feedback mobile">
        <div class="feedback-upvote">
            <img src="<?= $base; ?>/assets/images/upvote.svg" alt="" />
            0
        </div>
        <div class="feedback-comment">
            <img src="<?= $base; ?>/assets/images/comentario.svg" alt="" />
            0
        </div>
        <div class="feedback-share">
            <img src="<?= $base; ?>/assets/images/compartilhar.svg" alt="" />
            Compartilhar
        </div>
    </div>

    <?php if(!empty($reclamacao['midia'])): ?>
        <img src="<?= $base; ?>/<?= $reclamacao['midia']; ?>" alt="Imagem da reclamação" />
    <?php endif; ?>

    <div class="feed-card-content">
        <div class="feed-card-content-text">
            <img src="<?= $base; ?>/assets/images/bernardo.png" alt="" />
            <div class="feed-card-content-text-area">
                <a href="<?= $base; ?>/usuario/<?= $reclamacao['usuario_id']; ?>">
                    <h5><?= htmlspecialchars($reclamacao['usuario_nome']); ?></h5>
                </a>
                <p><?= htmlspecialchars($reclamacao['descricao']); ?></p>
            </div>
        </div>

        <div class="feed-card-content-feedback">
            <div class="feedback-upvote">
                <img src="<?= $base; ?>/assets/images/upvote.svg" alt="" />
                0
            </div>
            <div class="feedback-comment">
                <img src="<?= $base; ?>/assets/images/comentario.svg" alt="" />
                0
            </div>
            <div class="feedback-share">
                <img src="<?= $base; ?>/assets/images/compartilhar.svg" alt="" />
                Compartilhar
            </div>
        </div>
    </div>
</div>
