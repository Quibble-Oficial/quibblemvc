const followButton = document.getElementById("btnseguir");
let isFollowing = false;

followButton.addEventListener("click", () => {
  const seguirId = followButton.getAttribute("data-id");
  const url =
    followButton.textContent.trim() === "Seguir"
      ? "/usuario/seguir"
      : "/usuario/deixar-seguir";

  fetch(`${BASE}${url}`, {
    method: "POST",
    headers: { "Content-Type": "application/x-www-form-urlencoded" },
    body: `usuario_id=${id_usuario}&seguir_id=${seguirId}`,
  })
    .then((res) => res.json())
    .then((data) => {
      if (data.success) {
        followButton.textContent =
          followButton.textContent.trim() === "Seguir" ? "Seguindo" : "Seguir";
        followButton.classList.toggle("seguindo");
      }
    });
});

function juntar() {
  const botoes = document.getElementsByClassName("btnmembro");

  Array.from(botoes).forEach((botao) => {
    botao.addEventListener("click", () => {
      const isFollowing = botao.classList.toggle("seguindo");

      botao.textContent = isFollowing ? "Membro" : "Juntar-se";
    });
  });
}

function alternarIcone() {
  const botoes = document.getElementsByClassName("btnicone");

  Array.from(botoes).forEach((botao) => {
    botao.addEventListener("click", () => {
      const icone = botao.querySelector("i");
      const ativo = botao.classList.toggle("ativo");

      // Alterna o ícone
      if (ativo) {
        icone.classList.remove("bx-bell");
        icone.classList.add("bx-bell-slash");
      } else {
        icone.classList.remove("bx-bell-slash");
        icone.classList.add("bx-bell");
      }
    });
  });
}
