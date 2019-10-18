# My framework

## Author

Matheus Figueiredo Garcia <matheus.mfgarcia@gmail.com>

## Setup

### Instalando Docker

Faça o download e instalação do [Docker](https://docs.docker.com/install/#cloud)

## Iniciando Docker
``docker-compose up``

## Modo de Uso

### Exemplo

Dado o endereço: 
```http://localhost/api/bola```

A URI do endereço seria
```api/bola```

Portando estaríamos trabalhando com um Controlador chamado **Api** e uma action chamada **Bola**

### Criando um controlador

Um controlador deve seguir alguns conceitos básicos:
 * Ser uma classe herdando do controlador base CController.
 * Estar no namespace de controladores.
 * Possuir um construtor que chame o método pai __construct passando a action por parâmetro:
    ```parent::__construct($action)```
 * O seu nome precisa ser capitalize, ou seja, a primeira letra maiúscula.
 * O seu nome deve possuir o sufixo **Controller**.
 
 ```
<?php

namespace Controller;
use Framework\CController;

class ApiController extends CController
{

    public function __construct($action)
    {
        parent::__construct($action);

    }
}
```
 
No exemplo anterior, o controlador precisaria ser chamado **ApiController** 

### Criando uma action

Uma action é um método aberto de um controlador, para sua criação é necessário:
 * A action possui um prefixo **action**
 * O nome da action é capitalize, ou seja, primeira letra maiúscula
 
 
 ```
<?php

...

class ApiController extends CController
{

...

    public function actionIndex(){
    
        echo "Hello World";

    }

}
```
 
 

## Framework

### CController

Classe Abstrata que é herdada por todos os controladores, possui métodos comuns a todos os controladores.

### Core

Classe Central do projeto, atualmente responsável por armazenar o controlador e ação ativa

### Router 

Classe responsável por gerenciar as rotas da aplicação

## Library

### AutoLoad

Classe responsável por carregar todos os arquivos do projeto