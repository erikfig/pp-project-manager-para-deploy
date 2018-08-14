# Criando um project Manager com PHP

## Instalar server

 - Acesse o arquivo app/config/containers.php e configure o banco de dados nas linhas 11 até a 13

```
'dsn' => 'mysql:host=${HOST};',
'database' => '${BANCO}',
'username' => '${USUÁRIO}',
'password' => '${SENHA}',
```

 - Envie para o servidor e configure o document root para o diretório public
 - Crie o banco de dados usando o comando `php database.php` ou rodando o arquivo `database/01-database.sql` no banco de dados

## Instalar o cliente

 - Acesse o arquivo src/axios.js e adicione a linha `axios.defaults.baseURL = 'https://api.example.com';` trocando a url pela do endereço onde o servidor foi instalado.
 - Rode o comando `nom run build`
 - Publique o conteúdo do diretório dist
