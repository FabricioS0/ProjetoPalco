insert into bd_projpalco.Usuario(Nome, Email, Senha, CPF, Rua,Bairro, Cidade, NumeroResidencia, DataCriacao)
values("user", "user@email.com", 1234, 00000000000, "Vargas", "Centro", "Eunapolis", 1,  current_date());

select * from bd_projpalco.Usuario;

drop table bd_projpalco.Midia;

alter table bd_projpalco.Usuario modify column NumeroResidencia int null;

alter table bd_projpalco.Usuario add column CEP varchar(8) not null;


alter table bd_projpalco.Projeto drop column Descricao;

alter table bd_projpalco.Projeto add column Descricao varchar(1000) null;


alter table bd_projpalco.Projeto add column Resumo varchar(500) not null;

update bd_projpalco.Usuario
#set Senha = "45337ab528ab456381fd0fe311633a6b"
set Bloqueado = false
where UsuarioID = 1;

insert into bd_projpalco.Projeto(Nome, Descricao, ValorMeta, Publico, DataFim, UsuarioIDFK, DataCriacao) 
values("nome", "descricao",1000,false,'2026-01-21', 1, current_date());

select * from bd_projpalco.Projeto;

select * from bd_projpalco.Recompensa;

select * from bd_projpalco.Midia;

select * from bd_projpalco.AgendaCultural;

insert into bd_projpalco.AgendaCultural (LocalDescricao, Nome, Descricao, DataEvento, URL, ProjetoIDFK, DataCriacao) 
values('Porto Seguro - BA', 'Rock in Bahia','Evento especial para os amantes de Rock nas praias de costa do descobrimento', date_add(current_date(), interval 10 day), 'https://www.youtube.com/watch?v=4qc2aHFlUQw', 31, current_date());

update bd_projpalco.Midia set TipoArquivo = 'image' where MidiaID = 2 or MidiaID = 4 or MidiaID = 6 or MidiaID = 7 or MidiaID = 8