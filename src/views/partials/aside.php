<aside>
  <h1>Quibble</h1>
  <div class="aside-content">
    <nav>
      <ul>
        <li>
          <a href="<?= $base; ?>/"><img src="<?= $base; ?>/assets/images/home.png" alt="" class="icon" >
            <div class="tit">Feed</div>
          </a>
        </li>
        <li>
          <a href="<?= $base; ?>/usuario/<?=$usuario->usuario_id;?>"><img src="<?= $base; ?>/assets/images/perfil.png" alt="" class="icon">
            <div class="tit">Perfil</div>
          </a>
        </li>
        <li>
          <a href="<?= $base; ?>/notificacoes"><img src="<?= $base; ?>/assets/images/not-preto.png" alt="" class="icon">
            <div class="tit">Notificações</div>
          </a>
        </li>
        <li>
          <a href="<?= $base; ?>/comunidade"><img src="<?= $base; ?>/assets/images/comunidade.png" alt="" class="icon">
            <div class="tit">Comunidade</div>
          </a>
        </li>
        <li>
          <a href="mapa.html">
            <img src="<?= $base; ?>/assets/images/map.png" alt="" class="icon">
            <div class="tit">Mapa</div>
          </a>
        </li>
        <li>
          <a href="<?=$base;?>/visao-geral"><img src="<?= $base; ?>/assets/images/prefeito.png" alt="" class="icon">
            <div class="tit">Prefeitos</div>
          </a>
        </li>
      </ul>
    </nav>
    <button id="btn-nova-reclamacao"> + Nova Reclamação</button>
    <div class="linha-area">
      <div class="linha"></div>
    </div>
    <div id="nav-secundario">
      <ul>
        
        <li>
          <a href="ajuda.html"><img src="<?= $base; ?>/assets/images/ajuda.png" alt="" class="icon">
            <div class="tit">Ajuda</div>
          </a>
        </li>
        <li>
          <a href="config.html"><img src="<?= $base; ?>/assets/images/config.png" alt="" class="icon">
            <div class="tit">Configurações</div>
          </a>
        </li>
      </ul>
      
    </div>
  </div>
</aside>

<!-- HEADER -->

<header>
  <div class="header-content">
    <div id="pesquisa">
      <img src="<?= $base; ?>/assets/images/pesquisa.svg" alt="" />
      <input type="text" placeholder="Buscar reclamações, categorias ou usuários..." />
    </div>
    <div id="header-buttons">
      <div id="notificacoes-wrapper">
        <div id="notificacoes">
          <img src="<?= $base; ?>/assets/images/not-branco.png" alt="" />
          <div id="notificacoes-qtd"></div>
        </div>
        <div id="notification-dropdown" class="notification-dropdown" style="display: none;">
          <div id="fechar-dropdown">
            <img src="<?= $base; ?>/assets/images/sino_vazio.svg" alt="">
          </div>
          <div class="notification-item">
            <img src="<?=$base;?>/assets/images/bernardo.png" alt="Logo">
            <div>
              <p class="title">Águas do Rio</p>
              <p class="text">Estamos no processo de solução do seu problema...</p>
              <span class="date">21 de jun</span>
            </div>
          </div>

          <div class="notification-item">
            <img src="<?=$base;?>/assets/images/bernardo.png" alt="User">
            <div>
              <p class="title">Marcelo Crivella</p>
              <p class="text">Comentou: Foi enviado ao devido setor...</p>
              <span class="date">21 de jun</span>
            </div>
          </div>

          <div class="notification-item">
            <img src="<?=$base;?>/assets/images/bernardo.png" alt="Logo">
            <div>
              <p class="title">Nilópolis</p>
              <p class="text">Fernanda: Barulho de obra na rua...</p>
              <span class="date">21 de jun</span>
            </div>
          </div>

          <a href="#" class="see-more">Ver mais</a>
        </div>
      </div>
      <div id="perfil-header">
        <div id="text">
          <span><b><?= $usuario->nome; ?></b></span> <br>
          <span>Bairro-Rj</span>
            </div>
        <img src="<?= $base; ?>/assets/images/bernardo.png" alt="" id='perfil-img' />
      </div>
      
    </div>
  </div>
  <!-- ESSE HEADER SÓ APARECE NO MOBILE -->
  <div class="header-content mobile">
    <img src="<?= $base; ?>/assets/images/bernardo.png" alt="" id="perfil-mobile" />
    <img src="<?= $base; ?>/assets/images/LogoQuibbleAzulMobile.png" alt="" id="logo-mobile" />
    <div id="header-buttons-mobile">
      <div id="pesquisa-mobile">
        <img src="<?= $base; ?>/assets/images/notificacoes.svg" alt="" />
      </div>
      <!-- <div id="notificacoes-mobile">
        <img src="<?= $base; ?>/assets/images/chat.svg" alt="" />
      </div> -->
    </div>
  </div>
  <!-- ESSE FILTER SÓ APARECE NO MOBILE -->
  <!-- <div id="filter-mobile">
    <div class="filter-item-mobile">Defesa Civil</div>
    <div class="filter-item-mobile active">Infraestrutura</div>
    <div class="filter-item-mobile">Segurança</div>
  </div>
  <div id="filter-line-mobile"></div> -->
</header>

<!-- SUGESTÕES (DIREITA) -->

<?php if (!isset($mostrarsugestoes) || $mostrarsugestoes): ?>
    <div id="sugestoes">
        <div id="sugestoes-content">

            <div id="em-alta">
                <h3>Em Alta</h3> 
                <div class="linha-em-alta"></div>
                
                <a href="#">
                    <div class="em-alta-card">
                        <div class="em-alta-card-content">
                            <div class="em-alta-card-content-text">
                                <h4>Obra na Marginal Tietê sem sinalização</h4>
                                <p>Transporte <span>45 comentários</span></p> 
                            </div>
                        </div>
                        <div class="linha-em-alta-card"></div>
                    </div>
                </a>

                <a href="#">
                    <div class="em-alta-card">
                        <div class="em-alta-card-content">
                            <div class="em-alta-card-content-text">
                                <h4>Falta de médicos no posto de saúde</h4>
                                <p>Saúde <span>38 comentários</span></p>
                            </div>
                        </div>
                        <div class="linha-em-alta-card"></div>
                    </div>
                </a>

                <a href="#">
                    <div class="em-alta-card">
                        <div class="em-alta-card-content">
                            <div class="em-alta-card-content-text">
                                <h4>Buraco gigante na Av. Brasil</h4>
                                <p>Infraestrutura <span>32 comentários</span></p>
                            </div>
                        </div>
                        <div class="linha-em-alta-card"></div>
                    </div>
                </a>
            </div>
                
            <div id="sugestoes-area">
                <h3>Prefeitos para Seguir</h3> 
                <div class="linha-em-alta"></div>
                
                <div class="sugestoes-card">
                    <div class="prefeito-sigla rn">RN</div> 
                    <div class="sugestoes-card-content">
                        <h4>Ricardo Nunes</h4>
                        <p>Prefeito de São Paulo **MDB**</p>
                    </div>
                    <a href="#" class="btn-seguir">Seguir</a>
                </div>

                <div class="sugestoes-card">
                    <div class="prefeito-sigla ds">DS</div>
                    <div class="sugestoes-card-content">
                        <h4>Dario Saadi</h4>
                        <p>Prefeito de Campinas **Republicanos**</p>
                    </div>
                    <a href="#" class="btn-seguir">Seguir</a>
                </div>

                <div class="sugestoes-card">
                    <div class="prefeito-sigla rs">RS</div>
                    <div class="sugestoes-card-content">
                        <h4>Rogério Santos</h4>
                        <p>Prefeito de Santos **PSDB**</p>
                    </div>
                    <a href="#" class="btn-seguir">Seguir</a>
                </div>
            </div>

            <!-- <div id="sugestoes-para-seguir">
                <h3><img src="<?= $base; ?>/assets/images/bernardo.png" alt="Ícone Sugestões" class="card-title-icon"> Sugestões para Seguir</h3> 
                <div class="linha-em-alta"></div>

                <div class="sugestoes-card">
                    <div class="prefeito-sigla admv">AdM<br>V</div> 
                    <div class="sugestoes-card-content">
                        <h4>Associação de Moradores VM</h4>
                        <p>Vila Madalena</p>
                    </div>
                    <a href="#" class="btn-seguir">Seguir</a>
                </div>

                <div class="sugestoes-card">
                    <div class="prefeito-sigla pa">PA</div>
                    <div class="sugestoes-card-content">
                        <h4>Pedro Almeida</h4>
                        <p>Pinheiros</p>
                    </div>
                    <a href="#" class="btn-seguir">Seguir</a>
                </div>

                <div class="sugestoes-card">
                    <div class="prefeito-sigla cvs">CVS</div>
                    <div class="sugestoes-card-content">
                        <h4>Coletivo Verde SP</h4>
                        <p>São Paulo</p>
                    </div>
                    <a href="#" class="btn-seguir">Seguir</a>
                </div> -->
            </div>

        </div>
    </div>
<?php endif; ?>