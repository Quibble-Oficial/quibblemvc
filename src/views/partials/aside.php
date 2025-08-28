<aside>
      <h1>Quibble</h1>
      <div class="aside-content">
        <nav>
          <ul>
            <li>
              <a href="<?=$base;?>/"
                ><img src="<?=$base;?>/assets/images/home.svg" alt="" />
                <div>Feed</div></a
              >
            </li>
            <li>
              <a href="<?=$base;?>/perfil"
                ><img src="<?=$base;?>/assets/images/perfil.svg" alt="" />
                <div>Perfil</div></a
              >
            </li>
            <li>
              <a href="<?=$base;?>/notificacoes"
                ><img src="<?=$base;?>/assets/images/sino.svg" alt="" />
                <div>Notificações</div></a
              >
            </li>
            <li>
              <a href="comunidade.html"
                ><img src="<?=$base;?>/assets/images/comunidade.svg" alt="" />
                <div>Comunidade</div></a
              >
            </li>
            <li>
              <a href="mapa.html">
                <img src="<?=$base;?>/assets/images/ponteiro.svg" alt="" />
                <div>Mapa de Problemas</div></a
              >
            </li>
            <li>
              <a href="prefeitos.html"
                ><img src="<?=$base;?>/assets/images/tribunal.svg" alt="" />
                <div>Prefeitos</div></a
              >
            </li>
          </ul>
        </nav>
        <button id="btn-nova-reclamacao">Nova Reclamação</button>
        <div class="linha-area"><div class="linha"></div></div>
        <div id="nav-secundario">
          <ul>
            <li>
              <a href="#"
                ><img src="<?=$base;?>/assets/images/lua.svg" alt="" />
                <div>Tema</div></a
              >
            </li>
            <li>
              <a href="ajuda.html"
                ><img src="<?=$base;?>/assets/images/ajuda.svg" alt="" />
                <div>Ajuda</div></a
              >
            </li>
            <li>
              <a href="config.html"
                ><img src="<?=$base;?>/assets/images/config.svg" alt="" />
                <div>Configurações</div></a
              >
            </li>
          </ul>
          <div id="perfil-area">
            <a href="perfil.html">
              <figure id="perfil-area-img">
                <img src="<?=$base;?>/assets/images/bernardo.png" alt="" />
              </figure>
              <div id="perfil-area-info">
                <h2>Bernardo Cota</h2>
                <p>RJ - Rio de Janeiro</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </aside>

    <!-- HEADER -->

    <header>
      <div class="header-content">
        <div id="pesquisa">
          <img src="<?=$base;?>/assets/images/pesquisa.svg" alt="" />
          <div class="linha-vertical"></div>
          <input type="text" placeholder="Pesquisar" />
        </div>
        <div id="header-buttons">
          <div id="notificacoes">
            <img src="<?=$base;?>/assets/images/sino_vazio.svg" alt="" />
            <div id="notificacoes-qtd"></div>
          </div>
          <div id="config">
            <img src="<?=$base;?>/assets/images/config.svg" alt="" />
          </div>
        </div>
      </div>
      <!-- ESSE HEADER SÓ APARECE NO MOBILE -->
      <div class="header-content mobile">
        <img src="<?=$base;?>/assets/images/bernardo.png" alt="" id="perfil-mobile" />
        <img src="<?=$base;?>/assets/images/logo_padrao.svg" alt="" id="logo-mobile" />
        <div id="header-buttons-mobile">
          <div id="pesquisa-mobile">
            <img src="<?=$base;?>/assets/images/pesquisa_mobile.svg" alt="" />
          </div>
          <div id="notificacoes-mobile">
            <img src="<?=$base;?>/assets/images/chat.svg" alt="" />
          </div>
        </div>
      </div>
      <!-- ESSE FILTER SÓ APARECE NO MOBILE -->
      <div id="filter-mobile">
        <div class="filter-item-mobile">Defesa Civil</div>
        <div class="filter-item-mobile active">Infraestrutura</div>
        <div class="filter-item-mobile">Segurança</div>
      </div>
      <div id="filter-line-mobile"></div>
    </header>

    <!-- SUGESTÕES (DIREITA) -->

    <?php if(!isset($mostrarsugestoes) || $mostrarsugestoes): ?>
    <div id="sugestoes">
      <div id="sugestoes-content">
        <div id="em-alta">
          <h3>Em Alta no Quibble</h3>
          <div class="linha-em-alta"></div>
          <a href="#">
            <div class="em-alta-card">
              <div class="em-alta-card-content">
                <div class="em-alta-card-content-text">
                  <h4>Falta de água em Nilópolis</h4>
                  <p>Mais reclamado em: <span>Nilópolis</span></p>
                </div>
                <img src="<?=$base;?>/assets/images/emalta.png" alt="" />
              </div>
              <div class="linha-em-alta-card"></div>
            </div>
          </a>
          <a href="#">
            <div class="em-alta-card">
              <div class="em-alta-card-content">
                <div class="em-alta-card-content-text">
                  <h4>Falta de água em Nilópolis</h4>
                  <p>Mais reclamado em: <span>Nilópolis</span></p>
                </div>
                <img src="<?=$base;?>/assets/images/emalta.png" alt="" />
              </div>
              <div class="linha-em-alta-card"></div>
            </div>
          </a>
          <a href="#">
            <div class="em-alta-card">
              <div class="em-alta-card-content">
                <div class="em-alta-card-content-text">
                  <h4>Falta de água em Nilópolis</h4>
                  <p>Mais reclamado em: <span>Nilópolis</span></p>
                </div>
                <img src="<?=$base;?>/assets/images/emalta.png" alt="" />
              </div>
              <div class="linha-em-alta-card"></div>
            </div>
          </a>
        </div>
        <div id="sugestoes-area">
          <h3>Sugestões para seguir:</h3>
          <div class="linha-em-alta"></div>
          <div class="sugestoes-card">
            <img src="<?=$base;?>/assets/images/cidade.png" alt="" />
            <div class="sugestoes-card-content">
              <h4>Nova Iguaçu</h4>
              <p>21,2 mil membros</p>
            </div>
            <a href="#">Juntar-se</a>
          </div>
          <div class="sugestoes-card">
            <img src="<?=$base;?>/assets/images/cidade.png" alt="" />
            <div class="sugestoes-card-content">
              <h4>Nova Iguaçu</h4>
              <p>21,2 mil membros</p>
            </div>
            <a href="#">Juntar-se</a>
          </div>
          <div class="sugestoes-card">
            <img src="<?=$base;?>/assets/images/cidade.png" alt="" />
            <div class="sugestoes-card-content">
              <h4>Nova Iguaçu</h4>
              <p>21,2 mil membros</p>
            </div>
            <a href="#">Juntar-se</a>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>