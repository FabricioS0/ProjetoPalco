insert into bd_projpalco.Usuario(Nome, Email, Senha, CPF, Rua,Bairro, Cidade, NumeroResidencia, DataCriacao)
values("user", "user@email.com", 1234, 00000000000, "Vargas", "Centro", "Eunapolis", 1,  current_date());

select * from bd_projpalco.Usuario;

alter table bd_projpalco.Usuario modify column NumeroResidencia int null;

alter table bd_projpalco.Usuario add column CEP varchar(8) not null;

update bd_projpalco.Usuario
#set Senha = "45337ab528ab456381fd0fe311633a6b"
set Bloqueado = false
where UsuarioID = 1;

select * from bd_projpalco.Projeto;