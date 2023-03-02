**Docker

*****************************
Extensões que eu recomendo:

- Docker
- PHP
- PHP Debug
- PHP Intelephense
- PHP Extension Pack
- PHP Namespace Resolver
- Laravel Blade Snippets
*****************************


*****************************
Requisitos:

- Docker Desktop
- Dbeaver
*****************************


Após baixar e extrair o código, crie uma pasta no seu diretório C: com o nome de 'projetos' e coloque a pasta descompactada lá.

Abra o vscode (qualquer IDE) e depois vá na pasta 'portainer-data' e apague tudo que tem dentro dessa pasta.

Agora abra a pasta laravel, procure um arquivo com o nome '.env.example' e renomeie para '.env'.

Depois disso, vá na pasta 'database' (ainda dentro da pasta laravel) e crie um arquivo com o nome 'database.sqlite' lá dentro.

Vá no Dbeaver, no canto superior direito (New Database Connection), escolha o banco de dados sqlite, clique em 'Open ...' e vá no disco C: e siga esse caminho:
C: -> projetos -> CadCompras-master -> laravel -> database -> database.sqlite

Teste a conexão (botão inferior esquerdo) e faça download dos drivers necessários do sqlite.

Abra o Docker Desktop, caso não tenha o wsl, abra o terminal do seu computador e rode 'wsl --update'.

Abra um novo terminal no vscode e rode 'docker-compose up -d' e espere ele buildar as imagens do laravel, portainer e traefik.

Depois de buildar tudo, rode novamente 'docker-compose up -d' se aparecer esse erro: 'network traefik-public declared as external, but could not be found', rode esse código 'docker network create "traefik-public"'.

Agora os containers irão rodar, para acessar a aplicação abra seu navegador e digite 'laravel.localhost'.

Para pode ver o container instalando as dependências do PHP e do Laravel, vá no Docker Desktop, clique para expandir o cadcompras-master, e clique no container laravel para poder ver os logs de instalação das dependências. (não é necessário)

Depois dessas mensagens:

Application key set successfully.
Route cache cleared!
Routes cached successfully!
Compiled views cleared!
Blade templates cached successfully!

só abrir o navegador e digitar laravel.localhost que a aplicação irá rodar.

:)
