<div class="feed-card">
    <div class="feed-card-content-feedback mobile">
        <div class="feedback-upvote" data-id="<?= $reclamacao['reclamacao_id']; ?>">
            <img src="<?= $base; ?>/assets/images/upvote.svg" alt="" />
            <span class="upvote-count"><?= $reclamacao['total_upvotes']; ?></span>
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

    <?php if (!empty($reclamacao['midia'])): ?>
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
            <div class="feedback-upvote" data-id="<?= $reclamacao['reclamacao_id']; ?>">
                <img src="<?= $base; ?>/assets/images/upvote.svg" alt="" />
                <span class="upvote-count"><?= $reclamacao['total_upvotes']; ?></span>
            </div>
            <div class="feedback-comment">
                <img src="<?= $base; ?>/assets/images/comentario.svg" alt="" />
                <span><?= $reclamacao['total_comentarios'] ?? 0; ?></span>
            </div>
            <div class="feedback-share">
                <img src="<?= $base; ?>/assets/images/compartilhar.svg" alt="" />
                Compartilhar
            </div>
        </div>

        <div class="feed-card-comments">

            <div class="toggle-comments" onclick="toggleComments(this, <?= $reclamacao['reclamacao_id']; ?>)">
                💬 Ver comentários (<?= $reclamacao['total_comentarios']; ?>)
            </div>

            <div class="comments-box" style="display: none;" data-reclamacao-id="<?= $reclamacao['reclamacao_id']; ?>">

                <div class="new-comment">
                    <img src="<?= $base; ?>/assets/images/avatars/<?= $loggedUser->foto_perfil ?? 'default.png' ?>" alt="avatar">

                    <input
                        type="text"
                        class="comment-input"
                        data-reclamacao-id="<?= $reclamacao['reclamacao_id']; ?>"
                        placeholder="Escreva um comentário..." />

                    <button class="post-comment-btn" data-reclamacao-id="<?= $reclamacao['reclamacao_id']; ?>">
                        Publicar
                    </button>
                </div>

                <div class="comments-list">
                </div>

            </div>
        </div>

    </div>
</div>