# ProjetoPalco
ProjetoPalco é uma plataforma de crowdfunding desenvolvida com PHP, HTML, CSS e SQL, permitindo que artistas e criadores financiem seus projetos por meio de contribuições de apoiadores.

Tecnologias Utilizadas
*PHP: Linguagem de backend para processar lógica de negócio e interagir com o banco de dados.
*HTML/CSS: Estrutura e estilização da interface do usuário.
*SQL: Banco de dados para armazenar informações de usuários, projetos e contribuições.

Funcionalidades
*Cadastro e login de usuários
*Criação e gerenciamento de projetos de crowdfunding
*Contribuição financeira dos apoiadores
*Sistema de recompensas para apoiadores
*Painel administrativo para gerenciar projetos e usuários

Instalação e Configuração
*Clone este repositório: git clone https://github.com/FabricioS0/ProjetoPalco.git
*Configure o banco de dados: Crie um banco de dados MySQL.
*Execute o script SQL: /banco.sql
*Configure o arquivo /conexao.php com as credenciais do banco de dados.

Inicie um servidor local:
*php -S localhost:8000 
*Acesse a aplicação via navegador: http://localhost:8000
*Ou inicie o Apache e MySQL pelo painel de controle do XAMPP. Acesse a aplicação via navegador: http://localhost/projetopalco./

# Docker

## Construir e iniciar os containers
docker compose up -d

## Encerrar containers
docker compose down

## Reconstruir containers
docker compose down
docker compose build
docker compose up -d


