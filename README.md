# docker_cadastro
docker de cadastro para aula de desenvolvimento web

# Para abrir os containers
1. clonar o repositório para o desktop
```sh
https://github.com/rahmegm/docker_cadastro.git
```
2. se estiver na PUC abrir o docker desktop para instalar o daemon
3. aceitar os termos do docker desktop e esperar o daemon ser instalado
4. abrir o cmd
   digitar
   ```sh
   cd desktop
   ```
5. dentro do desktop no cmd
   digitar
   ```sh
   cd docker_cadastro
    ```
6. dentro da pasta docker_cadastro no cmd
   digitar
   ```sh
   cd lamp-stack
   ```
7. dentro da pasta lamp-stack no cmd
    digitar
    ```sh
    docker compose up -d
    ```
8. digite no browser
     ```sh
     localhost:8090
    ```
    para visualizar o banco de dados
9. no banco de dados
    digitar no servidor
    ```sh
    db
    ```
10. no banco de dados
    digitar em usuário
    ```sh
    root
    ```
11. no banco de dados
    digitar em senha
    ```sh
    root
    ```
12. após abrir outra aba no browser
    digite
     ```sh
     localhost:8100
    ```
13. dentro do localhost:8100
    fazer o cadastro do aluno utilizando os campos fornecidos e finalizar apertando o botão cadastro
14. atualizar o banco de dados apertando f5 para observar a mudança
# Para fechar os containers
1. digite no cmd
   ```sh
   docker compose stop
   ```
  


