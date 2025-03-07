create schema bd_projpalco;

create table bd_projpalco.Usuario(
	UsuarioID int primary key not null auto_increment,
    Nome varchar(60) not null,
    Email varchar(45) not null,
    Senha varchar(32) not null,
    CPF varchar(11) not null,
    CEP varchar(8) not null,
    Rua varchar(25) not null,
    Bairro varchar(25) not null,
    Cidade varchar(45) not null,
    NumeroResidencia int null,
    Bloqueado bool,
    DataCriacao date not null,
    DataModificacao date null
);

create table bd_projpalco.Projeto(
	ProjetoID int primary key not null auto_increment,
    Nome varchar(60) not null,
    Resumo varchar(500) not null,
    Descricao varchar(1000) null,
    ValorMeta decimal(7,2) not null,
    Publico boolean not null,
    DataFim date not null,
    UsuarioIDFK int not null,
    DataCriacao date not null,
    DataModificacao date null,
    foreign key(UsuarioIDFK) references bd_projpalco.Usuario(UsuarioID)
);

create table bd_projpalco.Midia(
	MidiaID int primary key not null auto_increment,
    Arquivo longblob not null,
    Descricao varchar(60) null,
    TipoArquivo varchar(10) null,
    ProjetoIDFK int not null,
    DataCriacao date not null,
    DataModificacao date null,
    foreign key (ProjetoIDFK) references bd_projpalco.Projeto(ProjetoID)
);

create table bd_projpalco.Recompensa(
	RecompensaID int primary key not null auto_increment,
    Descricao varchar(120) not null,
    Valor decimal(7,2) not null,
    ProjetoIDFK int not null,
    DataCriacao date not null,
    DataModificacao date null,
    foreign key (ProjetoIDFK) references bd_projpalco.Projeto(ProjetoID)
);

drop table bd_projpalco.AgendaCultural;

create table bd_projpalco.AgendaCultural(
	AgendaCulturalID int primary key not null auto_increment,
    Imagem longblob null,
    Nome varchar(50) not null,
    Descricao varchar(300) not null, 
    URL varchar(2083) not null,
    LocalDescricao varchar(100) not null,
    DataEvento date not null,
    ProjetoIDFK int null,
    DataCriacao date not null,
    DataModificacao date null,
    foreign key (ProjetoIDFK) references bd_projpalco.Projeto(ProjetoID)
);