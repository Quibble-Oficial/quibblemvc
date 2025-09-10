document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("nova-reclamacao-modal");
  const closeBtn = modal.querySelector(".close-modal");

  // Botão "Nova Reclamação" (pode estar no aside, no header ou footer)
  const btnNova = document.getElementById("btn-nova-reclamacao");

  if(btnNova){
    btnNova.addEventListener("click", () => {
      modal.style.display = "flex";
    });
  }

  closeBtn.addEventListener("click", () => {
    modal.style.display = "none";
  });

  window.addEventListener("click", (e) => {
    if(e.target == modal){
      modal.style.display = "none";
    }
  });
});
