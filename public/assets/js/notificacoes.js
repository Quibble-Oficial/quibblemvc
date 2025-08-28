const btn = document.getElementById("notificacoes");
const dropdown = document.getElementById("notification-dropdown");
const notificacoes_qtd = document.getElementById("notificacoes-qtd");


btn.addEventListener("click", () => {
  dropdown.style.display = 
    dropdown.style.display === "flex" ? "none" : "flex";
  notificacoes_qtd.style.display = 
    notificacoes_qtd.style.display === "none" ? "block" : "none";
});

// Fecha o dropdown se clicar fora
window.addEventListener("click", (e) => {
  if (!btn.contains(e.target) && !dropdown.contains(e.target)) {
    if (dropdown.style.display === "flex") {
        notificacoes_qtd.style.display = notificacoes_qtd.style.display === "none" ? "block" : "none";
    }
    dropdown.style.display = "none";
  }
});