<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <style>
      .modal-nova-reclamacao-x {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 9999;
        display: none;
        align-items: center;
        justify-content: center;
        background: rgba(21, 32, 43, 0.65);
        transition: background 0.2s;
      }
      .modal-nova-reclamacao-x.active {
        display: flex;
      }
      .modal-nova-reclamacao-x-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: transparent;
      }
      .modal-nova-reclamacao-x-content {
        position: relative;
        background: #15202b;
        color: #fff;
        border-radius: 18px;
        box-shadow: 0 0 32px 0 rgba(0, 0, 0, 0.25);
        width: 600px;
        max-width: 95vw;
        padding: 0 0 8px 0;
        display: flex;
        flex-direction: column;
        animation: modalFadeIn 0.25s cubic-bezier(0.4, 0, 0.2, 1);
      }
      @keyframes modalFadeIn {
        from {
          transform: scale(0.97) translateY(30px);
          opacity: 0;
        }
        to {
          transform: scale(1) translateY(0);
          opacity: 1;
        }
      }
      .modal-nova-reclamacao-x-close {
        position: absolute;
        top: 12px;
        left: 12px;
        background: none;
        border: none;
        color: #fff;
        font-size: 2rem;
        cursor: pointer;
        z-index: 2;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background 0.15s;
      }
      .modal-nova-reclamacao-x-close:hover {
        background: rgba(29, 161, 242, 0.12);
      }
      .modal-nova-reclamacao-x-header {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        padding: 20px 24px 0 24px;
      }
      .modal-nova-reclamacao-x-avatar {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        object-fit: cover;
      }
      .modal-nova-reclamacao-x-placeholder {
        color: #8899a6;
        font-size: 1.25rem;
        position: absolute;
        left: 84px;
        top: 32px;
        pointer-events: none;
        transition: opacity 0.2s;
        opacity: 1;
      }
      #modal-nova-reclamacao-x-textarea {
        background: transparent;
        border: none;
        color: #fff;
        font-size: 1.25rem;
        resize: none;
        width: 100%;
        min-height: 80px;
        max-height: 220px;
        outline: none;
        padding: 0 24px 0 84px;
        margin-top: -8px;
        margin-bottom: 8px;
        font-family: inherit;
      }
      .modal-nova-reclamacao-x-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 24px 8px 84px;
        min-height: 48px;
      }
      .modal-nova-reclamacao-x-icons {
        display: flex;
        align-items: center;
        gap: 8px;
      }
      .modal-nova-reclamacao-x-icon-btn {
        background: none;
        border: none;
        padding: 4px;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background 0.15s;
      }
      .modal-nova-reclamacao-x-icon-btn:enabled:hover {
        background: rgba(29, 161, 242, 0.12);
      }
      .modal-nova-reclamacao-x-postar {
        background: #1da1f2;
        color: #fff;
        border: none;
        border-radius: 999px;
        font-weight: bold;
        font-size: 1rem;
        padding: 8px 22px;
        cursor: pointer;
        transition: background 0.15s;
        opacity: 0.7;
      }
      .modal-nova-reclamacao-x-postar:enabled {
        opacity: 1;
      }
      .modal-nova-reclamacao-x-postar:active {
        background: #1577b3;
      }
      .modal-nova-reclamacao-x-img-preview {
        display: flex;
        justify-content: flex-start;
        padding-left: 84px;
        padding-bottom: 8px;
      }
      .modal-nova-reclamacao-x-img-preview img {
        width: 280px;
        height: 280px;
        object-fit: cover;
        border-radius: 18px;
        margin-top: 8px;
        box-shadow: 0 2px 12px 0 rgba(0, 0, 0, 0.1);
        border: 1px solid #22303c;
      }
      @media (max-width: 700px) {
        .modal-nova-reclamacao-x-content {
          width: 98vw;
          min-width: 0;
          padding: 0 0 8px 0;
        }
        .modal-nova-reclamacao-x-img-preview img {
          width: 90vw;
          height: auto;
          max-width: 320px;
          max-height: 320px;
        }
      }
    </style>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="<?=$base;?>/assets/images/logo_padrao.svg"
      type="image/x-icon"
    />
    <title>Quibble</title>
    <link rel="stylesheet" href="<?=$base;?>/assets/css/feed.css" />
    <link rel="stylesheet" href="<?=$base;?>/assets/js/animacoes.css" />
    <!-- Anime.js CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
  </head>
  <body>
    <div id="bg-animado"></div>

    <!-- MODAL NOVA RECLAMACAO ESTILO TWITTER/X -->
    <div
      id="modal-nova-reclamacao-x"
      class="modal-nova-reclamacao-x"
      style="display: none"
    >
      <div class="modal-nova-reclamacao-x-overlay"></div>
      <div class="modal-nova-reclamacao-x-content">
        <button
          class="modal-nova-reclamacao-x-close"
          id="close-modal-nova-reclamacao-x"
          aria-label="Fechar"
        >
          &times;
        </button>
        <div class="modal-nova-reclamacao-x-header">
          <img
            src="assets/images/bernardo.png"
            alt="Avatar"
            class="modal-nova-reclamacao-x-avatar"
          />
          <span
            class="modal-nova-reclamacao-x-placeholder"
            id="modal-nova-reclamacao-x-placeholder"
            >O que está acontecendo?</span
          >
        </div>
        <textarea
          id="modal-nova-reclamacao-x-textarea"
          maxlength="280"
          placeholder="O que está acontecendo?"
          rows="3"
        ></textarea>
        <div
          id="modal-nova-reclamacao-x-img-preview"
          class="modal-nova-reclamacao-x-img-preview"
          style="display: none"
        ></div>
        <div class="modal-nova-reclamacao-x-footer">
          <div class="modal-nova-reclamacao-x-icons">
            <label
              for="modal-nova-reclamacao-x-img-input"
              class="modal-nova-reclamacao-x-icon-btn"
              title="Adicionar imagem"
            >
              <svg width="24" height="24" fill="#1da1f2" viewBox="0 0 24 24">
                <path
                  d="M21 19V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2zm-2 0H5V5h14zm-7-3.5l2.5 3.01L17 15l-4-5-3 4z"
                ></path>
              </svg>
              <input
                type="file"
                id="modal-nova-reclamacao-x-img-input"
                accept="image/*"
                style="display: none"
              />
            </label>
            <button
              class="modal-nova-reclamacao-x-icon-btn"
              title="GIF"
              disabled
              style="opacity: 0.5; cursor: not-allowed"
            >
              <svg width="24" height="24" fill="#1da1f2" viewBox="0 0 24 24">
                <text
                  x="4"
                  y="17"
                  font-size="12"
                  font-family="Arial"
                  font-weight="bold"
                >
                  GIF
                </text>
              </svg>
            </button>
            <button
              class="modal-nova-reclamacao-x-icon-btn"
              title="Emoji"
              disabled
              style="opacity: 0.5; cursor: not-allowed"
            >
              <svg width="24" height="24" fill="#1da1f2" viewBox="0 0 24 24">
                <circle
                  cx="12"
                  cy="12"
                  r="10"
                  stroke="#1da1f2"
                  stroke-width="2"
                  fill="none"
                />
                <circle cx="9" cy="10" r="1" fill="#1da1f2" />
                <circle cx="15" cy="10" r="1" fill="#1da1f2" />
                <path
                  d="M9 15c1.5 1 4.5 1 6 0"
                  stroke="#1da1f2"
                  stroke-width="1.5"
                  fill="none"
                />
              </svg>
            </button>
            <button
              class="modal-nova-reclamacao-x-icon-btn"
              title="Localização"
              disabled
              style="opacity: 0.5; cursor: not-allowed"
            >
              <svg width="24" height="24" fill="#1da1f2" viewBox="0 0 24 24">
                <path
                  d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5A2.5 2.5 0 1 1 12 6a2.5 2.5 0 0 1 0 5.5z"
                ></path>
              </svg>
            </button>
          </div>
          <button
            id="modal-nova-reclamacao-x-postar"
            class="modal-nova-reclamacao-x-postar"
            disabled
          >
            Postar
          </button>
        </div>
      </div>
    </div>

    <!-- ANIMAÇÃO DE ENTRADA DO LOGO -->
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        anime({
          targets: "aside h1",
          translateY: [-100, 0],
          opacity: [0, 1],
          easing: "easeOutElastic(1, .8)",
          duration: 1800,
        });
        anime({
          targets: ".aside-content nav ul li",
          translateX: [-60, 0],
          opacity: [0, 1],
          delay: anime.stagger(120, { start: 600 }),
          easing: "easeOutExpo",
          duration: 1200,
        });
        anime({
          targets: "#feed .feed-card",
          scale: [0.8, 1],
          opacity: [0, 1],
          delay: anime.stagger(180, { start: 1200 }),
          easing: "easeOutBack",
          duration: 900,
        });
        // BG animado
        anime({
          targets: "#bg-animado",
          opacity: [0, 0.18],
          duration: 2000,
          easing: "easeInOutQuad",
        });

        // --- Bloco de comentários Gabriel Souza ---
        function createCommentsBlockFeed() {
          return `<div class="comments-block" style="margin-top:0px;background:#f5fbff;border-radius:0 0 12px 12px;padding:24px 32px 16px 32px;border-top:2px solid #e3eaf2;">
            <div class="comment-item" style="display:flex;align-items:flex-start;margin-bottom:18px;">
              <img src='assets/images/bernardo.png' alt='' style='width:48px;height:48px;border-radius:50%;object-fit:cover;margin-right:16px;'>
              <div style="flex:1;">
                <span style="font-weight:bold;color:#1851a6;font-size:1.1rem;">Bernardo Cota</span>
                <p style="margin:2px 0 12px 0;font-size:1rem;">É verdade! moro na esquina dessa rua e é o que mais está incomodando nossa vizinhança, precisa ser resolvido.</p>
                <div style="display:flex;gap:16px;align-items:center;">
                  <div class='feedback-upvote' style="display:flex;align-items:center;gap:6px;background:#eaf2ff;padding:6px 16px;border-radius:8px;font-size:15px;">
                    <img src='assets/images/upvote.svg' alt='' style="width:22px;"> 1 mil
                  </div>
                  <div class='feedback-comment' style="display:flex;align-items:center;gap:6px;background:#eaf2ff;padding:6px 16px;border-radius:8px;font-size:15px;">
                    <img src='assets/images/comentario.svg' alt='' style="width:22px;"> 2
                  </div>
                  <div class='feedback-share' style="display:flex;align-items:center;gap:6px;background:#eaf2ff;padding:6px 16px;border-radius:8px;font-size:15px;">
                    <img src='assets/images/compartilhar.svg' alt='' style="width:22px;"> Compartilhar
                  </div>
                </div>
              </div>
            </div>
            <div class="comment-item" style="display:flex;align-items:flex-start;margin-bottom:0;">
              <img src='assets/images/juliana.png' alt='' style='width:48px;height:48px;border-radius:50%;object-fit:cover;margin-right:16px;'>
              <div style="flex:1;">
                <span style="font-weight:bold;color:#1851a6;font-size:1.1rem;">Juliana Bertolani</span>
                <p style="margin:2px 0 12px 0;font-size:1rem;">Vamos querer botar as caras pra ajudar a população em, complicado esse prefeito!</p>
                <div style="display:flex;gap:16px;align-items:center;">
                  <div class='feedback-upvote' style="display:flex;align-items:center;gap:6px;background:#eaf2ff;padding:6px 16px;border-radius:8px;font-size:15px;">
                    <img src='assets/images/upvote.svg' alt='' style="width:22px;"> 500
                  </div>
                  <div class='feedback-comment' style="display:flex;align-items:center;gap:6px;background:#eaf2ff;padding:6px 16px;border-radius:8px;font-size:15px;">
                    <img src='assets/images/comentario.svg' alt='' style="width:22px;"> 0
                  </div>
                  <div class='feedback-share' style="display:flex;align-items:center;gap:6px;background:#eaf2ff;padding:6px 16px;border-radius:8px;font-size:15px;">
                    <img src='assets/images/compartilhar.svg' alt='' style="width:22px;"> Compartilhar
                  </div>
                </div>
              </div>
            </div>
          </div>`;
        }
        function addCommentToggleToGabrielSouzaFixa() {
          const card = document.querySelector(".feed-card-gabriel-souza-fixa");
          if (!card) return;
          let feedbacks = card.querySelectorAll(
            ".feed-card-content-feedback .feedback-upvote, .feed-card-content-feedback .feedback-comment, .feed-card-content-feedback .feedback-share"
          );
          if (!feedbacks.length) {
            feedbacks = card.querySelectorAll(
              ".feedback-upvote, .feedback-comment, .feedback-share"
            );
          }
          if (!feedbacks.length) return;
          const commentsBlock = card.querySelector(
            ".feed-comments-block-gabriel-souza-fixa"
          );
          function toggleComments() {
            if (!commentsBlock.innerHTML) {
              commentsBlock.innerHTML = createCommentsBlockFeed();
              commentsBlock.style.display = "block";
            } else {
              commentsBlock.style.display =
                commentsBlock.style.display === "none" ? "block" : "none";
            }
          }
          feedbacks.forEach((btn) => {
            btn.style.cursor = "pointer";
            btn.addEventListener("click", toggleComments);
          });
        }
        addCommentToggleToGabrielSouzaFixa();
        // --- Fim bloco de comentários Gabriel Souza ---
      });
    </script>

    <?php $render("aside");?>

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
          <div class="feed-card feed-card-gabriel-souza-fixa">
            <div class="feed-card-content-feedback mobile">
              <div class="feedback-upvote">
                <img src="<?=$base;?>/assets/images/upvote.svg" alt="" />
                1 mil
              </div>
              <div class="feedback-comment">
                <img src="<?=$base;?>/assets/images/comentario.svg" alt="" />
                2
              </div>
              <div class="feedback-share">
                <img src="<?=$base;?>/assets/images/compartilhar.svg" alt="" />
                Compartilhar
              </div>
            </div>
            <img src="<?=$base;?>/assets/images/feed.png" alt="" />
            <div class="feed-card-content">
              <div class="feed-card-content-text">
                <img src="<?=$base;?>/assets/images/souza.png" alt="" />
                <div class="feed-card-content-text-area">
                  <h5>Gabriel Souza</h5>
                  <p>
                    Buraco em Rua A tá atrapalhando a passagem da população,
                    completo descaso com o trabalhador...
                  </p>
                </div>
              </div>
              <div class="feed-card-content-feedback">
                <div class="feedback-upvote">
                  <img src="<?=$base;?>/assets/images/upvote.svg" alt="" />
                  1 mil
                </div>
                <div class="feedback-comment">
                  <img src="<?=$base;?>/assets/images/comentario.svg" alt="" />
                  2
                </div>
                <div class="feedback-share">
                  <img src="<?=$base;?>/assets/images/compartilhar.svg" alt="" />
                  Compartilhar
                </div>
              </div>
            </div>
            <!-- Bloco de comentários oculto por padrão -->
            <div
              class="feed-comments-block-gabriel-souza-fixa"
              style="display: none"
            ></div>
          </div>
        </div>
      </div>
    </main>

    <!-- FOOTER (SÓ APARECE NO MOBILE)-->

    <footer>
      <a href="index.html"
        ><img src="<?=$base;?>/assets/images/home_mobile.svg" alt=""
      /></a>
      <a href="perfil.html"
        ><img src="<?=$base;?>/assets/images/perfil_mobile.svg" alt=""
      /></a>
      <a href="notificacoes.html"
        ><img src="<?=$base;?>/assets/images/sino_mobile.svg" alt=""
      /></a>
      <a href="comunidade.html"
        ><img src="<?=$base;?>/assets/images/comunidade_mobile.svg" alt=""
      /></a>
      <a href="mapa.html"
        ><img src="<?=$base;?>/assets/images/ponteiro_mobile.svg" alt=""
      /></a>
      <a href="prefeitos.html"
        ><img src="<?=$base;?>/assets/images/tribunal_mobile.svg" alt=""
      /></a>
    </footer>

    <!-- CSS do modal -->
    <link rel="stylesheet" href="<?=$base;?>/assets/js/modal-nova-reclamacao.css" />
    <script>
      // Modal Nova Reclamação estilo Twitter/X
      document.addEventListener("DOMContentLoaded", function () {
        const btnNova = document.getElementById("btn-nova-reclamacao");
        const modal = document.getElementById("modal-nova-reclamacao-x");
        const overlay = modal.querySelector(".modal-nova-reclamacao-x-overlay");
        const closeBtn = document.getElementById(
          "close-modal-nova-reclamacao-x"
        );
        const textarea = document.getElementById(
          "modal-nova-reclamacao-x-textarea"
        );
        const postarBtn = document.getElementById(
          "modal-nova-reclamacao-x-postar"
        );
        const imgInput = document.getElementById(
          "modal-nova-reclamacao-x-img-input"
        );
        const imgPreview = document.getElementById(
          "modal-nova-reclamacao-x-img-preview"
        );
        const placeholder = document.getElementById(
          "modal-nova-reclamacao-x-placeholder"
        );

        function openModal() {
          modal.classList.add("active");
          textarea.value = "";
          postarBtn.disabled = true;
          imgPreview.style.display = "none";
          imgPreview.innerHTML = "";
          placeholder.style.opacity = "1";
          textarea.focus();
        }
        function closeModal() {
          modal.classList.remove("active");
          setTimeout(() => {
            modal.style.display = "none";
          }, 200);
        }
        btnNova.addEventListener("click", function () {
          modal.style.display = "flex";
          setTimeout(openModal, 10);
        });
        overlay.addEventListener("click", closeModal);
        closeBtn.addEventListener("click", closeModal);

        textarea.addEventListener("input", function () {
          postarBtn.disabled = textarea.value.trim().length === 0;
          placeholder.style.opacity = textarea.value.length ? "0" : "1";
        });

        textarea.addEventListener("focus", function () {
          placeholder.style.opacity = textarea.value.length ? "0" : "0.5";
        });
        textarea.addEventListener("blur", function () {
          placeholder.style.opacity = textarea.value.length ? "0" : "1";
        });

        imgInput.addEventListener("change", function (e) {
          if (e.target.files && e.target.files[0]) {
            const reader = new FileReader();
            reader.onload = function (ev) {
              imgPreview.innerHTML = `<img src="${ev.target.result}" alt="Prévia da imagem">`;
              imgPreview.style.display = "flex";
            };
            reader.readAsDataURL(e.target.files[0]);
          } else {
            imgPreview.style.display = "none";
            imgPreview.innerHTML = "";
          }
        });

        postarBtn.addEventListener("click", function () {
          // Adiciona o post ao feed igual aos outros tweets, com feedback
          const feed = document.getElementById("feed-content");
          const texto = textarea.value;
          let imgHTML = "";
          if (imgPreview.innerHTML) {
            var imgEl = imgPreview.querySelector("img");
            if (imgEl) {
              var src = imgEl.src;
              imgHTML = `<img src='${src}' alt='Imagem do post' class='feed-img-responsive'>`;
            }
          }
          const post = document.createElement("div");
          post.className = "feed-card";
          post.innerHTML =
            imgHTML +
            `<div class='feed-card-content'>
            <div class='feed-card-content-text'>
              <img src='<?=$base;?>/assets/images/bernardo.png' alt='' style='width:48px;height:48px;border-radius:50%;object-fit:cover;'>
              <div class='feed-card-content-text-area'>
                <h5>Bernardo Cota</h5>
                <p>${texto}</p>
              </div>
            </div>
            <div class='feed-card-content-feedback'>
              <div class='feedback-upvote'>
                <img src='<?=$base;?>/assets/images/upvote.svg' alt=''>
                2,5 mil
              </div>
              <div class='feedback-comment'>
                <img src='<?=$base;?>/assets/images/comentario.svg' alt=''>
                2
              </div>
              <div class='feedback-share'>
                <img src='<?=$base;?>/assets/images/compartilhar.svg' alt=''>
                Compartilhar
              </div>
            </div>
          </div>`;
          feed.prepend(post);
          closeModal();
          // Adiciona apenas dois comentários ao post criado
          function createCommentsBlockModal() {
            return `<div class="comments-block" style="margin-top:16px;">
             <div class="comment-item" style="display:flex;align-items:flex-start;margin-bottom:18px;">
               <img src='<?=$base;?>/assets/images/souza.png' alt='' style='width:40px;height:40px;border-radius:50%;object-fit:cover;margin-right:12px;'>
               <div style="flex:1;">
                 <span style="font-weight:bold;color:#1851a6;">Gabriel Souza</span>
                 <p style="margin:2px 0 8px 0;">É verdade! moro na esquina dessa rua e é o que mais está incomodando nossa vizinhança, precisa ser resolvido.</p>
                 <div style="display:flex;gap:12px;align-items:center;">
                   <div class='feedback-upvote' style="display:flex;align-items:center;gap:4px;background:#eaf2ff;padding:4px 12px;border-radius:8px;font-size:15px;">
                     <img src='<?=$base;?>/assets/images/upvote.svg' alt='' style="width:20px;"> 1,5 mil
                   </div>
                   <div class='feedback-comment' style="display:flex;align-items:center;gap:4px;background:#eaf2ff;padding:4px 12px;border-radius:8px;font-size:15px;">
                     <img src='<?=$base;?>/assets/images/comentario.svg' alt='' style="width:20px;"> 10
                   </div>
                   <div class='feedback-share' style="display:flex;align-items:center;gap:4px;background:#eaf2ff;padding:4px 12px;border-radius:8px;font-size:15px;">
                     <img src='<?=$base;?>/assets/images/compartilhar.svg' alt='' style="width:20px;"> Compartilhar
                   </div>
                 </div>
               </div>
             </div>
             <div class="comment-item" style="display:flex;align-items:flex-start;margin-bottom:18px;">
               <img src='<?=$base;?>/assets/images/juliana.png' alt='' style='width:40px;height:40px;border-radius:50%;object-fit:cover;margin-right:12px;'>
               <div style="flex:1;">
                 <span style="font-weight:bold;color:#1851a6;">Juliana Bertolani</span>
                 <p style="margin:2px 0 8px 0;">Vamos querer botar as caras pra ajudar a população em, complicado esse prefeito!</p>
                 <div style="display:flex;gap:12px;align-items:center;">
                   <div class='feedback-upvote' style="display:flex;align-items:center;gap:4px;background:#eaf2ff;padding:4px 12px;border-radius:8px;font-size:15px;">
                     <img src='<?=$base;?>/assets/images/upvote.svg' alt='' style="width:20px;"> 500
                   </div>
                   <div class='feedback-comment' style="display:flex;align-items:center;gap:4px;background:#eaf2ff;padding:4px 12px;border-radius:8px;font-size:15px;">
                     <img src='<?=$base;?>/assets/images/comentario.svg' alt='' style="width:20px;"> 0
                   </div>
                   <div class='feedback-share' style="display:flex;align-items:center;gap:4px;background:#eaf2ff;padding:4px 12px;border-radius:8px;font-size:15px;">
                     <img src='<?=$base;?>/assets/images/compartilhar.svg' alt='' style="width:20px;"> Compartilhar
                   </div>
                 </div>
               </div>
             </div>
          </div>`;
          }
          // Função para adicionar toggle de comentários a um card (modal)
          function addCommentToggleToCardModal(card) {
            const feedbacks = card.querySelectorAll(
              ".feed-card-content-feedback .feedback-upvote, .feed-card-content-feedback .feedback-comment, .feed-card-content-feedback .feedback-share"
            );
            if (!feedbacks.length) return;
            let commentsBlock = null;
            function toggleComments() {
              if (!commentsBlock) {
                commentsBlock = document.createElement("div");
                commentsBlock.innerHTML = createCommentsBlockModal();
                commentsBlock.style.animation = "fadeInComments 0.2s";
                card.appendChild(commentsBlock);
              } else {
                if (
                  commentsBlock.style.display === "none" ||
                  commentsBlock.style.display === ""
                ) {
                  commentsBlock.style.display = "block";
                } else {
                  commentsBlock.style.display = "none";
                }
              }
            }
            feedbacks.forEach((btn) => {
              btn.style.cursor = "pointer";
              btn.addEventListener("click", toggleComments);
            });
          }
          addCommentToggleToCardModal(post);
          // Marca o post criado pelo modal para não receber o toggle global
          post.setAttribute("data-modal-post", "true");
          // Função para criar bloco de comentários
          function createCommentsBlock() {
            return `<div class="comments-block" style="margin-top:16px;">
         <div class="comment-item" style="display:flex;align-items:flex-start;margin-bottom:18px;">
           <img src='<?=$base;?>/assets/images/bernardo.png' alt='' style='width:40px;height:40px;border-radius:50%;object-fit:cover;margin-right:12px;'>
           <div style="flex:1;">
             <span style="font-weight:bold;color:#1851a6;">Bernardo Cota</span>
             <p style="margin:2px 0 8px 0;">É verdade! moro na esquina dessa rua e é o que mais está incomodando nossa vizinhança, precisa ser resolvido.</p>
             <div style="display:flex;gap:12px;align-items:center;">
               <div class='feedback-upvote' style="display:flex;align-items:center;gap:4px;background:#eaf2ff;padding:4px 12px;border-radius:8px;font-size:15px;">
                 <img src='<?=$base;?>/assets/images/upvote.svg' alt='' style="width:20px;"> 1,5 mil
               </div>
               <div class='feedback-comment' style="display:flex;align-items:center;gap:4px;background:#eaf2ff;padding:4px 12px;border-radius:8px;font-size:15px;">
                 <img src='<?=$base;?>/assets/images/comentario.svg' alt='' style="width:20px;"> 10
               </div>
               <div class='feedback-share' style="display:flex;align-items:center;gap:4px;background:#eaf2ff;padding:4px 12px;border-radius:8px;font-size:15px;">
                 <img src='<?=$base;?>/assets/images/compartilhar.svg' alt='' style="width:20px;"> Compartilhar
               </div>
             </div>
           </div>
         </div>
         <div class="comment-item" style="display:flex;align-items:flex-start;margin-bottom:18px;">
           <img src='<?=$base;?>/assets/images/bernardo.png' alt='' style='width:40px;height:40px;border-radius:50%;object-fit:cover;margin-right:12px;'>
           <div style="flex:1;">
             <span style="font-weight:bold;color:#1851a6;">Juliana Bertolani</span>
             <p style="margin:2px 0 8px 0;">Outro dia quase atropecei no meio da rua, por pouco não torço o pé num desses buracos !</p>
             <div style="display:flex;gap:12px;align-items:center;">
               <div class='feedback-upvote' style="display:flex;align-items:center;gap:4px;background:#eaf2ff;padding:4px 12px;border-radius:8px;font-size:15px;">
                 <img src='<?=$base;?>/assets/images/upvote.svg' alt='' style="width:20px;"> 500
               </div>
               <div class='feedback-comment' style="display:flex;align-items:center;gap:4px;background:#eaf2ff;padding:4px 12px;border-radius:8px;font-size:15px;">
                 <img src='<?=$base;?>/assets/images/comentario.svg' alt='' style="width:20px;"> 0
               </div>
               <div class='feedback-share' style="display:flex;align-items:center;gap:4px;background:#eaf2ff;padding:4px 12px;border-radius:8px;font-size:15px;">
                 <img src='<?=$base;?>/assets/images/compartilhar.svg' alt='' style="width:20px;"> Compartilhar
               </div>
             </div>
           </div>
         </div>
      </div>`;
          }

          // Função para adicionar toggle de comentários à reclamação fixa do Gabriel Souza
          function addCommentToggleToGabrielSouzaFixa() {
            const card = document.querySelector(
              ".feed-card-gabriel-souza-fixa"
            );
            if (!card) return;
            let feedbacks = card.querySelectorAll(
              ".feed-card-content-feedback .feedback-upvote, .feed-card-content-feedback .feedback-comment, .feed-card-content-feedback .feedback-share"
            );
            if (!feedbacks.length) {
              feedbacks = card.querySelectorAll(
                ".feedback-upvote, .feedback-comment, .feedback-share"
              );
            }
            if (!feedbacks.length) return;
            const commentsBlock = card.querySelector(
              ".feed-comments-block-gabriel-souza-fixa"
            );
            function createCommentsBlockFeed() {
              return `<div class="comments-block" style="margin-top:0px;background:#f5fbff;border-radius:0 0 12px 12px;padding:24px 32px 16px 32px;border-top:2px solid #e3eaf2;">
          <div class="comment-item" style="display:flex;align-items:flex-start;margin-bottom:18px;">
            <img src='<?=$base;?>/assets/images/souza.png' alt='' style='width:48px;height:48px;border-radius:50%;object-fit:cover;margin-right:16px;'>
            <div style="flex:1;">
              <span style="font-weight:bold;color:#1851a6;font-size:1.1rem;">Gabriel Souza</span>
              <p style="margin:2px 0 12px 0;font-size:1rem;">É verdade! moro na esquina dessa rua e é o que mais está incomodando nossa vizinhança, precisa ser resolvido.</p>
              <div style="display:flex;gap:16px;align-items:center;">
                <div class='feedback-upvote' style="display:flex;align-items:center;gap:6px;background:#eaf2ff;padding:6px 16px;border-radius:8px;font-size:15px;">
                  <img src='<?=$base;?>/assets/images/upvote.svg' alt='' style="width:22px;"> 1 mil
                </div>
                <div class='feedback-comment' style="display:flex;align-items:center;gap:6px;background:#eaf2ff;padding:6px 16px;border-radius:8px;font-size:15px;">
                  <img src='<?=$base;?>/assets/images/comentario.svg' alt='' style="width:22px;"> 2
                </div>
                <div class='feedback-share' style="display:flex;align-items:center;gap:6px;background:#eaf2ff;padding:6px 16px;border-radius:8px;font-size:15px;">
                  <img src='<?=$base;?>/assets/images/compartilhar.svg' alt='' style="width:22px;"> Compartilhar
                </div>
              </div>
            </div>
          </div>
          <div class="comment-item" style="display:flex;align-items:flex-start;margin-bottom:0;">
            <img src='<?=$base;?>/assets/images/juliana.png' alt='' style='width:48px;height:48px;border-radius:50%;object-fit:cover;margin-right:16px;'>
            <div style="flex:1;">
              <span style="font-weight:bold;color:#1851a6;font-size:1.1rem;">Juliana Bertolani</span>
              <p style="margin:2px 0 12px 0;font-size:1rem;">Vamos querer botar as caras pra ajudar a população em, complicado esse prefeito!</p>
              <div style="display:flex;gap:16px;align-items:center;">
                <div class='feedback-upvote' style="display:flex;align-items:center;gap:6px;background:#eaf2ff;padding:6px 16px;border-radius:8px;font-size:15px;">
                  <img src='<?=$base;?>/assets/images/upvote.svg' alt='' style="width:22px;"> 500
                </div>
                <div class='feedback-comment' style="display:flex;align-items:center;gap:6px;background:#eaf2ff;padding:6px 16px;border-radius:8px;font-size:15px;">
                  <img src='<?=$base;?>/assets/images/comentario.svg' alt='' style="width:22px;"> 0
                </div>
                <div class='feedback-share' style="display:flex;align-items:center;gap:6px;background:#eaf2ff;padding:6px 16px;border-radius:8px;font-size:15px;">
                  <img src='<?=$base;?>/assets/images/compartilhar.svg' alt='' style="width:22px;"> Compartilhar
                </div>
              </div>
            </div>
          </div>
        </div>`;
            }
            function toggleComments() {
              if (!commentsBlock.innerHTML) {
                commentsBlock.innerHTML = createCommentsBlockFeed();
                commentsBlock.style.display = "block";
              } else {
                commentsBlock.style.display =
                  commentsBlock.style.display === "none" ? "block" : "none";
              }
            }
            feedbacks.forEach((btn) => {
              btn.style.cursor = "pointer";
              btn.addEventListener("click", toggleComments);
            });
          }

          // Adiciona toggle à reclamação fixa do Gabriel Souza
          addCommentToggleToGabrielSouzaFixa();
          // Responsividade da imagem do post criado
          const styleId = "feed-img-responsive-style";
          if (!document.getElementById(styleId)) {
            const style = document.createElement("style");
            style.id = styleId;
            style.innerHTML = `
          .feed-img-responsive {
            width: 100%;
            height: 700px;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
            display: block;
            margin: 0 auto;
          }
          @media (max-width: 700px) {
            .feed-img-responsive {
              height: auto;
              max-height: 320px;
            }
          }
        `;
            document.head.appendChild(style);
          }
        });
        // ESC fecha o modal
        document.addEventListener("keydown", function (e) {
          if (e.key === "Escape" && modal.classList.contains("active"))
            closeModal();
        });
      });
    </script>
  </body>
</html>
