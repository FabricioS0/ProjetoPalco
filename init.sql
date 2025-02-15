CREATE SCHEMA IF NOT EXISTS bd_projpalco;

CREATE TABLE IF NOT EXISTS bd_projpalco.Usuario (
    UsuarioID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Nome VARCHAR(60) NOT NULL,
    Email VARCHAR(45) NOT NULL,
    Senha VARCHAR(32) NOT NULL,
    CPF VARCHAR(11) NOT NULL,
    CEP VARCHAR(8) NOT NULL,
    Rua VARCHAR(25) NOT NULL,
    Bairro VARCHAR(25) NOT NULL,
    Cidade VARCHAR(45) NOT NULL,
    NumeroResidencia INT NULL,
    Bloqueado BOOL,
    DataCriacao DATE NOT NULL,
    DataModificacao DATE NULL
);

CREATE TABLE IF NOT EXISTS bd_projpalco.Projeto (
    ProjetoID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Nome VARCHAR(60) NOT NULL,
    Resumo VARCHAR(500) NOT NULL,
    Descricao VARCHAR(1000) NULL,
    ValorMeta DECIMAL(7,2) NOT NULL,
    Publico BOOLEAN NOT NULL,
    DataFim DATE NOT NULL,
    UsuarioIDFK INT NOT NULL,
    DataCriacao DATE NOT NULL,
    DataModificacao DATE NULL,
    FOREIGN KEY(UsuarioIDFK) REFERENCES bd_projpalco.Usuario(UsuarioID)
);

CREATE TABLE IF NOT EXISTS bd_projpalco.Midia (
    MidiaID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Arquivo LONGBLOB NOT NULL,
    Descricao VARCHAR(60) NULL,
    TipoArquivo VARCHAR(10) NULL,
    ProjetoIDFK INT NOT NULL,
    DataCriacao DATE NOT NULL,
    DataModificacao DATE NULL,
    FOREIGN KEY (ProjetoIDFK) REFERENCES bd_projpalco.Projeto(ProjetoID)
);

CREATE TABLE IF NOT EXISTS bd_projpalco.Recompensa (
    RecompensaID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Descricao VARCHAR(120) NOT NULL,
    Valor DECIMAL(7,2) NOT NULL,
    ProjetoIDFK INT NOT NULL,
    DataCriacao DATE NOT NULL,
    DataModificacao DATE NULL,
    FOREIGN KEY (ProjetoIDFK) REFERENCES bd_projpalco.Projeto(ProjetoID)
);

CREATE TABLE IF NOT EXISTS bd_projpalco.AgendaCultural (
    AgendaCultural INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Imagem BLOB NOT NULL,
    URL VARCHAR(2083) NOT NULL,
    ProjetoIDFK INT NULL,
    DataCriacao DATE NOT NULL,
    DataModificacao DATE NULL,
    FOREIGN KEY (ProjetoIDFK) REFERENCES bd_projpalco.Projeto(ProjetoID)
);
