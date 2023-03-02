**Docker

*****************************
Extensões que eu recomendo:

![Captura de tela 2023-03-02 084425](https://user-images.githubusercontent.com/104596830/222419255-8d9d50f6-11b6-4905-9b46-85c8649bfdb8.png)

*****************************

Requisitos:

- Docker Desktop
- Dbeaver
*****************************


Após baixar e extrair o código, crie uma pasta no seu diretório C: com o nome de 'projetos' e coloque a pasta descompactada lá.

![Captura de tela 2023-03-02 072422](https://user-images.githubusercontent.com/104596830/222414512-d1fb81e3-f1f7-408d-915d-80061da2661c.png)

![Captura de tela 2023-03-02 072508](https://user-images.githubusercontent.com/104596830/222414541-04cf791c-af78-4327-9717-7c959d2a45fa.png)

Abra o vscode (qualquer IDE) e depois vá na pasta 'portainer-data' e apague tudo que tem dentro dessa pasta.

![Captura de tela 2023-03-02 082242](https://user-images.githubusercontent.com/104596830/222414730-d83e990e-e639-49e3-9496-d95c2cd08b81.png)

Agora abra a pasta laravel, procure um arquivo com o nome '.env.example' e renomeie para '.env'.

![Captura de tela 2023-03-02 082353](https://user-images.githubusercontent.com/104596830/222414914-2e35733b-758b-483b-a83f-a255d78249a6.png)

Depois disso, vá na pasta 'database' (ainda dentro da pasta laravel) e crie um arquivo com o nome 'database.sqlite' lá dentro.

![Captura de tela 2023-03-02 082445](https://user-images.githubusercontent.com/104596830/222415111-c31d7b32-ebc0-4c47-b718-c7f8ebf5e4f5.png)

Vá no Dbeaver, no canto superior direito (New Database Connection), escolha o banco de dados sqlite, clique em 'Open ...' e vá no disco C: e siga esse caminho:
C: -> projetos -> CadCompras-master -> laravel -> database -> database.sqlite

![Captura de tela 2023-03-02 082542](https://user-images.githubusercontent.com/104596830/222415317-a9e54b50-3750-428e-901a-6d431e75a37a.png)

![Captura de tela 2023-03-02 084748](https://user-images.githubusercontent.com/104596830/222419970-644f0211-7448-4f35-a710-05384bdb3346.png)

Teste a conexão (botão inferior esquerdo) e faça download dos drivers necessários do sqlite.

![Captura de tela 2023-03-02 082658](https://user-images.githubusercontent.com/104596830/222415669-035c65e6-9e11-400d-9b4b-7b449c1c98f1.png)

Abra o Docker Desktop, caso não tenha o wsl, abra o terminal do seu computador e rode 'wsl --update'.

Abra um novo terminal no vscode e rode 'docker-compose up -d' e espere ele buildar as imagens do laravel, portainer e traefik.

Depois de buildar tudo, rode novamente 'docker-compose up -d' se aparecer esse erro: 'network traefik-public declared as external, but could not be found', rode esse código 'docker network create "traefik-public"'.

Agora os containers irão rodar, para acessar a aplicação abra seu navegador e digite 'laravel.localhost'.

![Captura de tela 2023-03-02 083643](https://user-images.githubusercontent.com/104596830/222417690-369700b8-9a2d-44f1-9506-18430bf72eff.png)

Para pode ver o container instalando as dependências do PHP e do Laravel, vá no Docker Desktop, clique para expandir o cadcompras-master, e clique no container laravel para poder ver os logs de instalação das dependências. (não é necessário)

![Captura de tela 2023-03-02 083006](https://user-images.githubusercontent.com/104596830/222416313-8a8c67b8-5a5d-42ea-a74e-a3c9afd79469.png)

Depois dessas mensagens:

![Captura de tela 2023-03-02 082814](https://user-images.githubusercontent.com/104596830/222415904-2217343a-d12a-4451-b01e-439fbd18ecb2.png)

só abrir o navegador e digitar laravel.localhost que a aplicação irá rodar.

![Captura de tela 2023-03-02 083045](https://user-images.githubusercontent.com/104596830/222416441-77ec4b62-e76e-413b-b686-03d99e5423a5.png)

:)

*****************************
