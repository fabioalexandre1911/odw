# odw - olivas digital wordpress com docker
Criação de Tema Modelo em WordPress do Zero 
Tema base para projetos WordPress

# Para projetos novos, vá até a pasta themes e clone o tema, renomeie a pasta do tema, exclua a pasta .git original do tema e inicie um novo git no tema

- git git@github.com:fabioalexandre1911/odw.git
- cd ODW
- git init

# Atualizar versão do Node para 16.13.2, com NVM, e rodar npm install para instalar as dependências.
yarn install

# Carrregar o arquivo package.json com o conteúdo do arquivo.

- yarn start

# Inicializando o Docker

- docker compose up -d

# Todos os assets adicionados precisam ser adicionados para funcionarem no projeto.

Lista oficial: https://hub.docker.com/_/wordpress?tab=tags&page=1&ordering=last_updated
O que devemos levar em consideração aqui é: se projeto existe, fixa inicialmente a versão do projeto, caso contrário, iremos buscar a numeração da última versão
No arquivo wordpress/Dockerfile

git checkout dev

Pronto!

Neste momento já deve ser possível acessar o site em http://wpdemo.com.br e  o banco na porta 8081