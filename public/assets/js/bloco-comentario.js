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
              <img src='./assets/images/bernardo.png' alt='' style='width:48px;height:48px;border-radius:50%;object-fit:cover;margin-right:16px;'>
              <div style="flex:1;">
                <span style="font-weight:bold;color:#1851a6;font-size:1.1rem;">Bernardo Cota</span>
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
