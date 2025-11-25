CREATE DATABASE quibble CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE quibble;

-- ==============================
-- CIDADES
-- ==============================
CREATE TABLE cidades (
    cidade_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    estado VARCHAR(50) NOT NULL,
    UNIQUE(nome, estado)
) ENGINE=InnoDB;

-- ==============================
-- BAIRROS
-- ==============================
CREATE TABLE bairros (
    bairro_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cidade_id INT UNSIGNED NOT NULL,
    FOREIGN KEY (cidade_id) REFERENCES cidades(cidade_id) ON DELETE CASCADE,
    UNIQUE(nome, cidade_id)
) ENGINE=InnoDB;

-- ==============================
-- LOCALIZACOES
-- ==============================
CREATE TABLE localizacoes (
    localizacao_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    cep VARCHAR(10) NULL,
    logradouro VARCHAR(255) NOT NULL,
    numero VARCHAR(20) NULL,
    complemento VARCHAR(100) NULL,
    bairro_id INT UNSIGNED NOT NULL,
    cidade_id INT UNSIGNED NOT NULL,
    estado VARCHAR(50) NULL,
    latitude DECIMAL(10,7) NOT NULL,
    longitude DECIMAL(10,7) NOT NULL,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    atualizado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (bairro_id) REFERENCES bairros(bairro_id) ON DELETE RESTRICT,
    FOREIGN KEY (cidade_id) REFERENCES cidades(cidade_id) ON DELETE RESTRICT
) ENGINE=InnoDB;

-- ==============================
-- USUARIOS
-- ==============================
CREATE TABLE usuarios (
    usuario_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    token VARCHAR(255) NULL,
    tipo_usuario ENUM('administrador','cidadao','prefeito','secretaria') NOT NULL DEFAULT 'cidadao',
    bio TEXT NULL,
    foto_perfil VARCHAR(255) NULL,
    telefone VARCHAR(20) NULL,
    localizacao_id INT UNSIGNED NULL,
    criado_em TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    atualizado_em TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (localizacao_id) REFERENCES localizacoes(localizacao_id) ON DELETE RESTRICT
) ENGINE=InnoDB;

-- ==============================
-- CATEGORIAS
-- ==============================
CREATE TABLE categorias (
    categoria_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL UNIQUE
) ENGINE=InnoDB;

-- ==============================
-- SECRETARIAS
-- ==============================
CREATE TABLE secretarias (
    secretaria_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    localizacao_id INT UNSIGNED NOT NULL,
    FOREIGN KEY (localizacao_id) REFERENCES localizacoes(localizacao_id) ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE secretariacategorias (
    secretaria_id INT UNSIGNED NOT NULL,
    categoria_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (secretaria_id, categoria_id),
    FOREIGN KEY (secretaria_id) REFERENCES secretarias(secretaria_id) ON DELETE CASCADE,
    FOREIGN KEY (categoria_id) REFERENCES categorias(categoria_id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- ==============================
-- COMUNIDADES
-- ==============================
CREATE TABLE comunidades (
    comunidade_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    bairro_id INT UNSIGNED NULL,
    localizacao_id INT UNSIGNED NOT NULL,
    FOREIGN KEY (bairro_id) REFERENCES bairros(bairro_id) ON DELETE RESTRICT,
    FOREIGN KEY (localizacao_id) REFERENCES localizacoes(localizacao_id) ON DELETE RESTRICT,
    UNIQUE(nome, bairro_id)
) ENGINE=InnoDB;

-- ==============================
-- INSTITUICOES
-- ==============================
CREATE TABLE instituicoes (
    instituicao_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL,
    descricao TEXT NULL,
    categoria_id INT UNSIGNED NULL,
    bairro_id INT UNSIGNED NULL,
    localizacao_id INT UNSIGNED NOT NULL,
    criado_em TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (categoria_id) REFERENCES categorias(categoria_id) ON DELETE RESTRICT,
    FOREIGN KEY (bairro_id) REFERENCES bairros(bairro_id) ON DELETE RESTRICT,
    FOREIGN KEY (localizacao_id) REFERENCES localizacoes(localizacao_id) ON DELETE RESTRICT
) ENGINE=InnoDB;

-- ==============================
-- RECLAMACOES
-- ==============================
CREATE TABLE reclamacoes (
    reclamacao_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT UNSIGNED NOT NULL,
    categoria_id INT UNSIGNED NOT NULL,
    comunidade_id INT UNSIGNED NULL,
    instituicao_id INT UNSIGNED NULL,
    localizacao_id INT UNSIGNED NULL,
    titulo VARCHAR(200) NOT NULL,
    descricao TEXT NOT NULL,
    midia VARCHAR(255) NULL,
    status ENUM('pendente','em_andamento','resolvido','cancelado') DEFAULT 'pendente',
    prazo_limite DATE NULL,
    criado_em TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    atualizado_em TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(usuario_id) ON DELETE CASCADE,
    FOREIGN KEY (categoria_id) REFERENCES categorias(categoria_id) ON DELETE RESTRICT,
    FOREIGN KEY (comunidade_id) REFERENCES comunidades(comunidade_id) ON DELETE RESTRICT,
    FOREIGN KEY (instituicao_id) REFERENCES instituicoes(instituicao_id) ON DELETE RESTRICT,
    FOREIGN KEY (localizacao_id) REFERENCES localizacoes(localizacao_id) ON DELETE RESTRICT
) ENGINE=InnoDB;

-- ==============================
-- AVALIACOES
-- ==============================
CREATE TABLE avaliacoes (
    avaliacao_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT UNSIGNED NOT NULL,
    tipo_avaliado ENUM('prefeito','secretaria','instituicao') NOT NULL,
    alvo_id INT UNSIGNED NOT NULL,
    nota DECIMAL(2,1) NOT NULL CHECK (`nota` >= 0.0 AND `nota` <= 5.0),
    comentario TEXT NULL,
    criado_em TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(usuario_id) ON DELETE CASCADE,
    UNIQUE(usuario_id, tipo_avaliado, alvo_id)
) ENGINE=InnoDB;

-- ==============================
-- NOTIFICACOES
-- ==============================
CREATE TABLE notificacoes (
    notificacao_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT UNSIGNED NOT NULL,
    tipo ENUM('aviso','mensagem','resolucao','interacao','sistema') NOT NULL,
    conteudo TEXT NOT NULL,
    lida BOOLEAN DEFAULT FALSE,
    criado_em TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(usuario_id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- ==============================
-- BLOQUEIOS
-- ==============================
CREATE TABLE bloqueios (
    bloqueador_id INT UNSIGNED NOT NULL,
    bloqueado_id INT UNSIGNED NOT NULL,
    silenciado BOOLEAN DEFAULT FALSE,
    bloqueado BOOLEAN DEFAULT FALSE,
    criado_em TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (bloqueador_id, bloqueado_id),
    FOREIGN KEY (bloqueador_id) REFERENCES usuarios(usuario_id) ON DELETE CASCADE,
    FOREIGN KEY (bloqueado_id) REFERENCES usuarios(usuario_id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- ==============================
-- SEGUIDORES
-- ==============================
CREATE TABLE seguidores (
    seguidor_id INT UNSIGNED NOT NULL,
    seguido_id INT UNSIGNED NOT NULL,
    seguido_em TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (seguidor_id, seguido_id),
    FOREIGN KEY (seguidor_id) REFERENCES usuarios(usuario_id) ON DELETE CASCADE,
    FOREIGN KEY (seguido_id) REFERENCES usuarios(usuario_id) ON DELETE CASCADE,
    CHECK (seguidor_id <> seguido_id)
) ENGINE=InnoDB;

-- ==============================
-- CONVERSAS
-- ==============================
CREATE TABLE conversas (
    conversa_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    criada_em TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE conversaparticipantes (
    conversa_id INT UNSIGNED NOT NULL,
    tipo_participante ENUM('usuario','secretaria') NOT NULL,
    participante_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (conversa_id, tipo_participante, participante_id),
    FOREIGN KEY (conversa_id) REFERENCES conversas(conversa_id) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE mensagens (
    mensagem_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    conversa_id INT UNSIGNED NOT NULL,
    tipo_remetente ENUM('usuario','secretaria') NOT NULL,
    remetente_id INT UNSIGNED NOT NULL,
    conteudo TEXT NOT NULL,
    enviada_em TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    lida BOOLEAN DEFAULT FALSE,
    FOREIGN KEY (conversa_id) REFERENCES conversas(conversa_id) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE upvotes (
    usuario_id INT UNSIGNED NOT NULL,
    reclamacao_id INT UNSIGNED NOT NULL,
    upvotado_em TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (usuario_id, reclamacao_id),
    FOREIGN KEY (usuario_id) REFERENCES usuarios(usuario_id) ON DELETE CASCADE,
    FOREIGN KEY (reclamacao_id) REFERENCES reclamacoes(reclamacao_id) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE comentarios (
    comentario_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    reclamacao_id INT UNSIGNED NOT NULL,
    usuario_id INT UNSIGNED NOT NULL,
    comentario TEXT NOT NULL,
    criado_em TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    atualizado_em TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (reclamacao_id) REFERENCES reclamacoes(reclamacao_id) ON DELETE CASCADE,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(usuario_id) ON DELETE CASCADE
) ENGINE=InnoDB;

INSERT INTO categorias (nome) VALUES
('Mobilidade Urbana'),
('Educação'),
('Saúde'),
('Segurança'),
('Infraestrutura'),
('Postura Urbana'),
('Defesa Civil'),
('Meio Ambiente'),
('Transporte Público'),
('Saneamento Básico');

INSERT INTO usuarios (usuario_id, nome, email, senha, token, tipo_usuario, bio, foto_perfil, telefone, localizacao_id, criado_em, atualizado_em) VALUES (NULL, 'Juliana Bertolani', 'secretaria@gov.com.br', '$2y$10$XLadRelianuE/Xte8lSKwe8k0kVHL1aWxZkqROrT4LUr53pGnREpG', 'a7988eca12b7cc8ec33071afcaffc3cc', 'secretaria', NULL, NULL, NULL, NULL, '2025-11-23 23:24:57', '2025-11-25 18:36:22')