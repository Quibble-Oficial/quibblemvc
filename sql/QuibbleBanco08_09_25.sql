CREATE DATABASE quibble CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE quibble;

-- ==============================
-- TABELA DE CIDADES
-- ==============================
CREATE TABLE Cidades (
    cidade_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    estado VARCHAR(50) NOT NULL,
    UNIQUE(nome, estado)
) ENGINE=InnoDB;

-- ==============================
-- TABELA DE BAIRROS
-- ==============================
CREATE TABLE Bairros (
    bairro_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cidade_id INT UNSIGNED NOT NULL,
    FOREIGN KEY (cidade_id) REFERENCES Cidades(cidade_id) ON DELETE CASCADE,
    UNIQUE(nome, cidade_id)
) ENGINE=InnoDB;

-- ==============================
-- TABELA DE LOCALIZAÇÕES
-- ==============================
CREATE TABLE Localizacoes (
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
    FOREIGN KEY (bairro_id) REFERENCES Bairros(bairro_id) ON DELETE RESTRICT,
    FOREIGN KEY (cidade_id) REFERENCES Cidades(cidade_id) ON DELETE RESTRICT
) ENGINE=InnoDB;

-- ==============================
-- TABELA DE USUÁRIOS
-- ==============================
CREATE TABLE Usuarios (
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
    FOREIGN KEY (localizacao_id) REFERENCES Localizacoes(localizacao_id) ON DELETE RESTRICT
) ENGINE=InnoDB;

-- ==============================
-- TABELA DE CATEGORIAS DE RECLAMAÇÃO
-- ==============================
CREATE TABLE Categorias_Reclamacoes (
    categoria_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL UNIQUE
) ENGINE=InnoDB;

-- ==============================
-- TABELA DE SECRETARIAS
-- ==============================
CREATE TABLE Secretarias (
    secretaria_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    localizacao_id INT UNSIGNED NOT NULL,
    FOREIGN KEY (localizacao_id) REFERENCES Localizacoes(localizacao_id) ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE Secretaria_Categoria (
    secretaria_id INT UNSIGNED NOT NULL,
    categoria_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (secretaria_id, categoria_id),
    FOREIGN KEY (secretaria_id) REFERENCES Secretarias(secretaria_id) ON DELETE CASCADE,
    FOREIGN KEY (categoria_id) REFERENCES Categorias_Reclamacoes(categoria_id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- ==============================
-- TABELA DE COMUNIDADES
-- ==============================
CREATE TABLE Comunidades (
    comunidade_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    bairro_id INT UNSIGNED NULL,
    localizacao_id INT UNSIGNED NOT NULL,
    FOREIGN KEY (bairro_id) REFERENCES Bairros(bairro_id) ON DELETE RESTRICT,
    FOREIGN KEY (localizacao_id) REFERENCES Localizacoes(localizacao_id) ON DELETE RESTRICT,
    UNIQUE(nome, bairro_id)
) ENGINE=InnoDB;

-- ==============================
-- TABELA DE INSTITUIÇÕES
-- ==============================
CREATE TABLE Instituicoes (
    instituicao_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL,
    descricao TEXT NULL,
    categoria_id INT UNSIGNED NULL,
    bairro_id INT UNSIGNED NULL,
    localizacao_id INT UNSIGNED NOT NULL,
    criado_em TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (categoria_id) REFERENCES Categorias_Reclamacoes(categoria_id) ON DELETE RESTRICT,
    FOREIGN KEY (bairro_id) REFERENCES Bairros(bairro_id) ON DELETE RESTRICT,
    FOREIGN KEY (localizacao_id) REFERENCES Localizacoes(localizacao_id) ON DELETE RESTRICT
) ENGINE=InnoDB;

-- ==============================
-- TABELA DE RECLAMAÇÕES
-- ==============================
CREATE TABLE Reclamacoes (
    reclamacao_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT UNSIGNED NOT NULL,
    categoria_id INT UNSIGNED NOT NULL,
    comunidade_id INT UNSIGNED NULL,
    instituicao_id INT UNSIGNED NULL,
    localizacao_id INT UNSIGNED NOT NULL,
    titulo VARCHAR(200) NOT NULL,
    descricao TEXT NOT NULL,
    status ENUM('pendente','em_andamento','resolvido','cancelado') DEFAULT 'pendente',
    prazo_limite DATE NULL,
    criado_em TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    atualizado_em TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(usuario_id) ON DELETE CASCADE,
    FOREIGN KEY (categoria_id) REFERENCES Categorias_Reclamacoes(categoria_id) ON DELETE RESTRICT,
    FOREIGN KEY (comunidade_id) REFERENCES Comunidades(comunidade_id) ON DELETE RESTRICT,
    FOREIGN KEY (instituicao_id) REFERENCES Instituicoes(instituicao_id) ON DELETE RESTRICT,
    FOREIGN KEY (localizacao_id) REFERENCES Localizacoes(localizacao_id) ON DELETE RESTRICT
) ENGINE=InnoDB;

-- ==============================
-- TABELA DE AVALIAÇÕES
-- ==============================
CREATE TABLE Avaliacoes (
    avaliacao_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT UNSIGNED NOT NULL,
    tipo_avaliado ENUM('prefeito','secretaria','instituicao') NOT NULL,
    alvo_id INT UNSIGNED NOT NULL,
    nota DECIMAL(2,1) NOT NULL CHECK (`nota` >= 0.0 AND `nota` <= 5.0),
    comentario TEXT NULL,
    criado_em TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(usuario_id) ON DELETE CASCADE,
    UNIQUE(usuario_id, tipo_avaliado, alvo_id)
) ENGINE=InnoDB;

-- ==============================
-- TABELA DE NOTIFICAÇÕES
-- ==============================
CREATE TABLE Notificacoes (
    notificacao_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT UNSIGNED NOT NULL,
    tipo ENUM('aviso','mensagem','resolucao','interacao','sistema') NOT NULL,
    conteudo TEXT NOT NULL,
    lida BOOLEAN DEFAULT FALSE,
    criado_em TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(usuario_id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- ==============================
-- BLOQUEIOS E SILENCIAMENTOS
-- ==============================
CREATE TABLE Bloqueios (
    bloqueador_id INT UNSIGNED NOT NULL,
    bloqueado_id INT UNSIGNED NOT NULL,
    silenciado BOOLEAN DEFAULT FALSE,
    bloqueado BOOLEAN DEFAULT FALSE,
    criado_em TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (bloqueador_id, bloqueado_id),
    FOREIGN KEY (bloqueador_id) REFERENCES Usuarios(usuario_id) ON DELETE CASCADE,
    FOREIGN KEY (bloqueado_id) REFERENCES Usuarios(usuario_id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- ==============================
-- SEGUIDORES
-- ==============================
CREATE TABLE Seguidores (
    seguidor_id INT UNSIGNED NOT NULL,
    seguido_id INT UNSIGNED NOT NULL,
    seguido_em TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (seguidor_id, seguido_id),
    FOREIGN KEY (seguidor_id) REFERENCES Usuarios(usuario_id) ON DELETE CASCADE,
    FOREIGN KEY (seguido_id) REFERENCES Usuarios(usuario_id) ON DELETE CASCADE,
    CHECK (seguidor_id <> seguido_id)
) ENGINE=InnoDB;

-- ==============================
-- SISTEMA DE MENSAGENS
-- ==============================
CREATE TABLE Conversas (
    conversa_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    criada_em TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE Conversa_Participantes (
    conversa_id INT UNSIGNED NOT NULL,
    tipo_participante ENUM('usuario','secretaria') NOT NULL,
    participante_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (conversa_id, tipo_participante, participante_id),
    FOREIGN KEY (conversa_id) REFERENCES Conversas(conversa_id) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE Mensagens (
    mensagem_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    conversa_id INT UNSIGNED NOT NULL,
    tipo_remetente ENUM('usuario','secretaria') NOT NULL,
    remetente_id INT UNSIGNED NOT NULL,
    conteudo TEXT NOT NULL,
    enviada_em TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    lida BOOLEAN DEFAULT FALSE,
    FOREIGN KEY (conversa_id) REFERENCES Conversas(conversa_id) ON DELETE CASCADE
) ENGINE=InnoDB;
