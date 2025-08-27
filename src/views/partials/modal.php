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
            src="<?=$base;?>/assets/images/bernardo.png"
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