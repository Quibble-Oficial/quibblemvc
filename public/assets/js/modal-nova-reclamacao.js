document.addEventListener("DOMContentLoaded", function () {
  const btnNova = document.getElementById("btn-nova-reclamacao");
  const modal = document.getElementById("modal-nova-reclamacao-x");
  const overlay = modal.querySelector(".modal-nova-reclamacao-x-overlay");
  const closeBtn = document.getElementById("close-modal-nova-reclamacao-x");
  const textarea = document.getElementById("modal-nova-reclamacao-x-textarea");
  const postarBtn = document.getElementById("modal-nova-reclamacao-x-postar");
  const imgInput = document.getElementById("modal-nova-reclamacao-x-img-input");
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
              <img src='./assets/images/bernardo.png' alt='' style='width:48px;height:48px;border-radius:50%;object-fit:cover;'>
              <div class='feed-card-content-text-area'>
                <h5>Bernardo Cota</h5>
                <p>${texto}</p>
              </div>
            </div>
            <div class='feed-card-content-feedback'>
              <div class='feedback-upvote'>
                <img src='./assets/images/upvote.svg' alt=''>
                2,5 mil
              </div>
              <div class='feedback-comment'>
                <img src='./assets/images/comentario.svg' alt=''>
                2
              </div>
              <div class='feedback-share'>
                <img src='./assets/images/compartilhar.svg' alt=''>
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
               <img src='./assets/images/souza.png' alt='' style='width:40px;height:40px;border-radius:50%;object-fit:cover;margin-right:12px;'>
               <div style="flex:1;">
                 <span style="font-weight:bold;color:#1851a6;">Gabriel Souza</span>
                 <p style="margin:2px 0 8px 0;">É verdade! moro na esquina dessa rua e é o que mais está incomodando nossa vizinhança, precisa ser resolvido.</p>
                 <div style="display:flex;gap:12px;align-items:center;">
                   <div class='feedback-upvote' style="display:flex;align-items:center;gap:4px;background:#eaf2ff;padding:4px 12px;border-radius:8px;font-size:15px;">
                     <img src='./assets/images/upvote.svg' alt='' style="width:20px;"> 1,5 mil
                   </div>
                   <div class='feedback-comment' style="display:flex;align-items:center;gap:4px;background:#eaf2ff;padding:4px 12px;border-radius:8px;font-size:15px;">
                     <img src='./assets/images/comentario.svg' alt='' style="width:20px;"> 10
                   </div>
                   <div class='feedback-share' style="display:flex;align-items:center;gap:4px;background:#eaf2ff;padding:4px 12px;border-radius:8px;font-size:15px;">
                     <img src='./assets/images/compartilhar.svg' alt='' style="width:20px;"> Compartilhar
                   </div>
                 </div>
               </div>
             </div>
             <div class="comment-item" style="display:flex;align-items:flex-start;margin-bottom:18px;">
               <img src='./assets/images/juliana.png' alt='' style='width:40px;height:40px;border-radius:50%;object-fit:cover;margin-right:12px;'>
               <div style="flex:1;">
                 <span style="font-weight:bold;color:#1851a6;">Juliana Bertolani</span>
                 <p style="margin:2px 0 8px 0;">Vamos querer botar as caras pra ajudar a população em, complicado esse prefeito!</p>
                 <div style="display:flex;gap:12px;align-items:center;">
                   <div class='feedback-upvote' style="display:flex;align-items:center;gap:4px;background:#eaf2ff;padding:4px 12px;border-radius:8px;font-size:15px;">
                     <img src='./assets/images/upvote.svg' alt='' style="width:20px;"> 500
                   </div>
                   <div class='feedback-comment' style="display:flex;align-items:center;gap:4px;background:#eaf2ff;padding:4px 12px;border-radius:8px;font-size:15px;">
                     <img src='./assets/images/comentario.svg' alt='' style="width:20px;"> 0
                   </div>
                   <div class='feedback-share' style="display:flex;align-items:center;gap:4px;background:#eaf2ff;padding:4px 12px;border-radius:8px;font-size:15px;">
                     <img src='./assets/images/compartilhar.svg' alt='' style="width:20px;"> Compartilhar
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
           <img src='./assets/images/bernardo.png' alt='' style='width:40px;height:40px;border-radius:50%;object-fit:cover;margin-right:12px;'>
           <div style="flex:1;">
             <span style="font-weight:bold;color:#1851a6;">Bernardo Cota</span>
             <p style="margin:2px 0 8px 0;">É verdade! moro na esquina dessa rua e é o que mais está incomodando nossa vizinhança, precisa ser resolvido.</p>
             <div style="display:flex;gap:12px;align-items:center;">
               <div class='feedback-upvote' style="display:flex;align-items:center;gap:4px;background:#eaf2ff;padding:4px 12px;border-radius:8px;font-size:15px;">
                 <img src='./assets/images/upvote.svg' alt='' style="width:20px;"> 1,5 mil
               </div>
               <div class='feedback-comment' style="display:flex;align-items:center;gap:4px;background:#eaf2ff;padding:4px 12px;border-radius:8px;font-size:15px;">
                 <img src='./assets/images/comentario.svg' alt='' style="width:20px;"> 10
               </div>
               <div class='feedback-share' style="display:flex;align-items:center;gap:4px;background:#eaf2ff;padding:4px 12px;border-radius:8px;font-size:15px;">
                 <img src='./assets/images/compartilhar.svg' alt='' style="width:20px;"> Compartilhar
               </div>
             </div>
           </div>
         </div>
         <div class="comment-item" style="display:flex;align-items:flex-start;margin-bottom:18px;">
           <img src='./assets/images/bernardo.png' alt='' style='width:40px;height:40px;border-radius:50%;object-fit:cover;margin-right:12px;'>
           <div style="flex:1;">
             <span style="font-weight:bold;color:#1851a6;">Juliana Bertolani</span>
             <p style="margin:2px 0 8px 0;">Outro dia quase atropecei no meio da rua, por pouco não torço o pé num desses buracos !</p>
             <div style="display:flex;gap:12px;align-items:center;">
               <div class='feedback-upvote' style="display:flex;align-items:center;gap:4px;background:#eaf2ff;padding:4px 12px;border-radius:8px;font-size:15px;">
                 <img src='./assets/images/upvote.svg' alt='' style="width:20px;"> 500
               </div>
               <div class='feedback-comment' style="display:flex;align-items:center;gap:4px;background:#eaf2ff;padding:4px 12px;border-radius:8px;font-size:15px;">
                 <img src='./assets/images/comentario.svg' alt='' style="width:20px;"> 0
               </div>
               <div class='feedback-share' style="display:flex;align-items:center;gap:4px;background:#eaf2ff;padding:4px 12px;border-radius:8px;font-size:15px;">
                 <img src='./assets/images/compartilhar.svg' alt='' style="width:20px;"> Compartilhar
               </div>
             </div>
           </div>
         </div>
      </div>`;
    }

    // Função para adicionar toggle de comentários à reclamação fixa do Gabriel Souza
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
      function createCommentsBlockFeed() {
        return `<div class="comments-block" style="margin-top:0px;background:#f5fbff;border-radius:0 0 12px 12px;padding:24px 32px 16px 32px;border-top:2px solid #e3eaf2;">
          <div class="comment-item" style="display:flex;align-items:flex-start;margin-bottom:18px;">
            <img src='./assets/images/souza.png' alt='' style='width:48px;height:48px;border-radius:50%;object-fit:cover;margin-right:16px;'>
            <div style="flex:1;">
              <span style="font-weight:bold;color:#1851a6;font-size:1.1rem;">Gabriel Souza</span>
              <p style="margin:2px 0 12px 0;font-size:1rem;">É verdade! moro na esquina dessa rua e é o que mais está incomodando nossa vizinhança, precisa ser resolvido.</p>
              <div style="display:flex;gap:16px;align-items:center;">
                <div class='feedback-upvote' style="display:flex;align-items:center;gap:6px;background:#eaf2ff;padding:6px 16px;border-radius:8px;font-size:15px;">
                  <img src='./assets/images/upvote.svg' alt='' style="width:22px;"> 1 mil
                </div>
                <div class='feedback-comment' style="display:flex;align-items:center;gap:6px;background:#eaf2ff;padding:6px 16px;border-radius:8px;font-size:15px;">
                  <img src='./assets/images/comentario.svg' alt='' style="width:22px;"> 2
                </div>
                <div class='feedback-share' style="display:flex;align-items:center;gap:6px;background:#eaf2ff;padding:6px 16px;border-radius:8px;font-size:15px;">
                  <img src='./assets/images/compartilhar.svg' alt='' style="width:22px;"> Compartilhar
                </div>
              </div>
            </div>
          </div>
          <div class="comment-item" style="display:flex;align-items:flex-start;margin-bottom:0;">
            <img src='./assets/images/juliana.png' alt='' style='width:48px;height:48px;border-radius:50%;object-fit:cover;margin-right:16px;'>
            <div style="flex:1;">
              <span style="font-weight:bold;color:#1851a6;font-size:1.1rem;">Juliana Bertolani</span>
              <p style="margin:2px 0 12px 0;font-size:1rem;">Vamos querer botar as caras pra ajudar a população em, complicado esse prefeito!</p>
              <div style="display:flex;gap:16px;align-items:center;">
                <div class='feedback-upvote' style="display:flex;align-items:center;gap:6px;background:#eaf2ff;padding:6px 16px;border-radius:8px;font-size:15px;">
                  <img src='./assets/images/upvote.svg' alt='' style="width:22px;"> 500
                </div>
                <div class='feedback-comment' style="display:flex;align-items:center;gap:6px;background:#eaf2ff;padding:6px 16px;border-radius:8px;font-size:15px;">
                  <img src='./assets/images/comentario.svg' alt='' style="width:22px;"> 0
                </div>
                <div class='feedback-share' style="display:flex;align-items:center;gap:6px;background:#eaf2ff;padding:6px 16px;border-radius:8px;font-size:15px;">
                  <img src='./assets/images/compartilhar.svg' alt='' style="width:22px;"> Compartilhar
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
    if (e.key === "Escape" && modal.classList.contains("active")) closeModal();
  });
});
