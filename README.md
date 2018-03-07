# CES Interview Project

This is an example project utilizing PHP7, Zend Framework, jQuery and jQuery Mobile. The base of the project utilizes [ZendSkeletonApplication](https://github.com/zendframework/ZendSkeletonApplication). Non-essential files were removed from the project.

## Project Structure

```
├── config
│   ├── autoload
│   │   ├── .gitignore
│   │   ├── development.local.php.distribution
│   │   ├── global.php
│   │   ├── local.php.dist
│   │   └── zend-developer-tools.local-development.php
│   ├── application.config.php
│   ├── development.config.php.dist
│   └── modules.config.php
├── data
│   └── cache
│   │   └── .gitignore
├── module
│   └── Application
│   │   ├── config
│   │   │   └── module.config.php*
│   │   ├── src
│   │   │   ├── Controller
│   │   │   │   ├── IndexController.php*
│   │   │   │   └── PanelController.php*
│   │   │   ├── Model
│   │   │   │   └── PanelModel.php*
│   │   │   └── Module.php
│   │   └── view
│   │       ├── application
│   │       │   └── index
│   │       │       └── index.phtml*
│   │       ├── error
│   │       │   ├── 404.phtml
│   │       │   └── index.phtml
│   │       └── layout
│   │           └── layout.phtml*
├── public
│   ├── css
│   │   └── jquery.mobile-1.4.5.min.css*
│   ├── img
│   │   └── favicon.ico*
│   ├── js
│   │   ├── jquery-1.11.min.js*
│   │   ├── jquery.mobule-1.4.5.min.js*
│   │   └── scripts.js*
│   ├── .htaccess
│   ├── index.php
│   └── web.config
├── vendor
├── .gitignore
├── composer.json*
├── composer.lock*
├── docker-compose.yml
├── Dockerfile
├── LICENSE.md
├── phpcs.xml
└── README.md
```
* Denotes added or modified files

## RESTful Web Service

#### Endpoint

**/api/panel/:id**

#### Files

**/module/Application/src/Controller/PanelController.php**  
Handles requests

**/module/Application/src/Model/PanelModel.php**  
Returns data

**/module/Application/config/module.config.php**  
Defines endpoints

## Frontend Views

#### Files

**/module/Application/view/application/layout/layout.phtml**  
Contains index page content

**/module/Application/view/application/index/index.phtml**  
Defines overall layout

**/public/js/scripts.js**  
Contains script handling ajax requests and panel functionality

## Using docker-compose

This skeleton provides a `docker-compose.yml` for use with
[docker-compose](https://docs.docker.com/compose/); it
uses the `Dockerfile` provided as its base. Build and start the image using:

```bash
$ docker-compose up -d --build
```

At this point, you can visit http://localhost:8080 to see the site running.

You can also run composer from the image. The container environment is named
"zf", so you will pass that value to `docker-compose run`:

```bash
$ docker-compose run zf composer install
```
