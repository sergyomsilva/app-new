# API em Laravel para cadastro de notícias através da API Google News

### Tecnologias utilizadas:

- PHP 7.4
- Laravel 8.83.7
- Banco de dados MySql
- API Google News

### Instalação do projeto:

- Clonar o projeto:

`git clone https://github.com/sergyomsilva/app-new.git`

- Instalar dependências:

`composer install`

- Subistitua as configurações das variáveis para as suas configurações locais:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=
    DB_USERNAME=
    DB_PASSWORD=

- Adicionar sua API Key do Google News no seu arquivo ENV:

`API_GOOGLE_NEWS_TOKEN={API_KEY}`

- Efetuar migrações:

`php artisan migrate`

- Iniciar projeto:

`php artisan serve`


------------


> O sistema está agendado para todo dia puxar novas notícias. Caso queira atualizar a base de dados a qualquer instante favor executar o comando `php artisan news:get` e o sistema irá puxar as notícias do dia!! ;)

------------


> Para que o agendamento de tarefas da API funcione em ambiente de testes, é necessário rodar o comando `php artisan schedule:work`

------------


### Documentação de uso da API

A API conta com dois endpoints somente. Um para listar todas as notícias e outro para somente listar a notícia através de um ID.


------------


**`GET`** **Listar todas as notícias**:

Url: `http://127.0.0.1:8000/api/posts`

Headers

Content-Type : application/json

accept : application/json


------------

**`GET`** ** Listar notícia por ID:**

Url: `http://127.0.0.1:8000/api/posts/{id}`

Headers

Content-Type : application/json

accept : application/json
