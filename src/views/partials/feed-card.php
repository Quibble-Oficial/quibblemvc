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
                0
            </div>
            <div class="feedback-share">
                <img src="<?= $base; ?>/assets/images/compartilhar.svg" alt="" />
                Compartilhar
            </div>
        </div>

        <div class="feed-card-comments">

            <!-- Botão para abrir/fechar -->
            <div class="toggle-comments" onclick="toggleComments(this)">
                💬 Ver comentários (3)
            </div>

            <!-- Caixa de comentários (começa escondida) -->
            <div class="comments-box">
                <!-- Novo comentário -->
                <div class="new-comment">
                    <img src="<?= $base; ?>/assets/images/avatars/<?= $loggedUser->avatar ?>" alt="avatar">
                    <input type="text" placeholder="Escreva um comentário..." />
                    <button>Publicar</button>
                </div>

                <!-- Lista -->
                <div class="comment">
                    <img src="<?= $base; ?>/assets/images/avatars/user1.png" alt="avatar">
                    <div class="comment-content">
                        <h6>Maria Souza</h6>
                        <p>Concordo muito com essa reclamação!</p>
                    </div>
                </div>

                <div class="comment">
                    <img src="<?= $base; ?>/assets/images/avatars/user2.png" alt="avatar">
                    <div class="comment-content">
                        <h6>João Pedro</h6>
                        <p>Aconteceu comigo também na minha cidade.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>