insert into bd_projpalco.Usuario(Nome, Email, Senha, CPF, Rua,Bairro, Cidade, NumeroResidencia, DataCriacao)
values("user", "user@email.com", 1234, 00000000000, "Vargas", "Centro", "Eunapolis", 1,  current_date());

select * from bd_projpalco.Usuario
where email = 'user@email.com';

#alter table bd_projpalco.Usuario modify column Senha varchar(32) not null;

#alter table bd_projpalco.Usuario add column Bloqueado bool default false;

update bd_projpalco.Usuario
#set Senha = "45337ab528ab456381fd0fe311633a6b"
set Bloqueado = false
where UsuarioID = 1;