<div id="nova-reclamacao-modal" class="modal">
  <div class="modal-content">
    <span class="close-modal">&times;</span>
    <h2>Nova Reclamação</h2>

    <form action="<?= $base; ?>/reclamacao/nova" method="POST" enctype="multipart/form-data">
      <!-- Usuário já vem do $loggedUser -->
      <input type="hidden" name="usuario_id" value="<?= $usuario->usuario_id; ?>">

      <label for="titulo">Título</label>
      <input type="text" id="titulo" name="titulo" maxlength="200" required>

      <label for="descricao">Descrição</label>
      <textarea id="descricao" name="descricao" rows="4" required></textarea>

      <label for="categoria_id">Categoria</label>
      <select id="categoria_id" name="categoria_id" required>
        <option value="">Selecione...</option>
        <?php foreach ($categorias as $cat): ?>
          <option value="<?=$cat['categoria_id'];?>"><?=$cat['nome'];?></option>
        <?php endforeach; ?>
      </select>

      <label for="foto">Foto (opcional)</label>
      <input type="file" id="foto" name="midia" accept="image/*">

      <button type="submit" class="btn-publicar">Publicar</button>
    </form>
  </div>
</div>