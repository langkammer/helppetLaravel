# Help Pet

[![N|Solid](https://image.ibb.co/gybELQ/logo_provisoria.jpg)](https://nodesource.com/products/nsolid)

Sistema totalmente gratuito e Opensource de ajuda ao animal de rua ou perdido a ser resgatado e devolvido a um lar seguro, software desenvolvido por iniciativa não governamental.  

# Funcionalidades!

  - Inclusão de Animais de rua utilizando relato de pessoas e georreferenciando o local em que foi visto.
  - Busca de Animais por ponto de localização.
  - Rastreamento de localização de animais inclusos no sistema.
  - Notificação de Animais perto.
  
### Tecnologias
Tecnologias utilizadas
* [AngularJS] 
* [Ionic] 
* [Twitter Bootstrap] 
* [node.js] 
* [jQuery] 
* [AngularMaterial]

### Instalação
Necessario instalação composer 
- Para Instalação da parte de serviços do backend side server:

```sh
$ cd backend
$ composer install
$ cd public
$ npm install
$ bower install
```

Alterar as variaveis de ambiente do arquivo .env 

```sh
  #Configuração do Banco de Dados   
  DB_CONNECTION=
  DB_HOST=
  DB_PORT=
  DB_DATABASE=
  DB_USERNAME=
  DB_PASSWORD=
  ...
  #Configuração do Serviço de Email
  MAIL_DRIVER=
  MAIL_HOST=
  MAIL_PORT=
  MAIL_USERNAME=
  MAIL_PASSWORD=
  MAIL_ENCRYPTION=
  MAIL_FROM_ADDRESS=
  MAIL_FROM_NAME=
  
  #Configuração do Sistema de drive host 
  DROPBOX_TOKEN=
  DROPBOX_APP_SECRET=

  
```


   [node.js]: <http://nodejs.org>
   [Twitter Bootstrap]: <http://twitter.github.com/bootstrap/>
   [jQuery]: <http://jquery.com>
   [AngularJS]: <http://angularjs.org>
   [Laravel]: <https://github.com/laravel/laravel> 
   [Ionic]: <https://github.com/ionic-team/ionic>    
   [AngularMaterial]: <https://github.com/angular/material>
   
