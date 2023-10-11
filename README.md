<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Documention

[documentation](https://docs.google.com/presentation/d/1SEMnKyzjlw16Ysewkqgp2XxGd1Wev7pug0OEetiCltM/edit?usp=sharing)

En este enlace encontraras paso a paso como se ha elaborado este proyecto. 



## About Project

Este Repositorio Contiene el código del trabajo final de un curso de BACK con LARAVEL.

La aplicación consiste en un gestor de usuario y de peliculas, que se van a alamacenar en una BAse de Datos. 

Usuarios : Partimos de los usuarios que proporcionan las migraciomes de Laravel, instalamos paquete Breeze y añadimos algunos campos. El más importante es rol, que nos permite dar permisos diferente a nuestros usuarios.

Peliculas : Realizamos una busqueda de titulos  a traves de la web  [https://www.themoviedb.org/](https://www.themoviedb.org/). Por lo tanto hay que registrarse y ontener una API_KEY

## Requerimientos


PHP 8.1
mysql 
Composer
npm

## Guia Instalación

Este es un proyecto de prueba realizado por Alberto Mozo

1. Descarga el repositorio
2. Descromprime la carpeta dentro de un acarpeta de tu servidor
3. Renombra la carpeta (Opcional)
4. Entra a la carpeta desde la terminal cd directorio/de/la/carpeta
5. Copia el contenido del archivo .env.example a un nuevo archivo llamado .env
6. Modifica las variables de conexión del nuevo archivo .env
Define los datos de conexión
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
Introduce la api key obtenedida de [https://www.themoviedb.org/]
TMDB_APIKEY = "**************************"
TMDB_ROUTE_POSTER = "https://image.tmdb.org/t/p/w154"
TMDB_ROUTE_IMAGE_500 = "https://image.tmdb.org/t/p/w500"

6. Crea una base de datos para el proyecto
7. Ejecuta composer install
8. Ejecuta php artisan key:generate
9. Ejecuta php artisan migrate
10. Abre la aplicación en el navegador
    php artisan serve
    npm run dev




## Instalación

Se necesita tener instado composer y npm (node.js)

git clone https://github.com/albertomozo/Laravel_peliculas.git

composer install

configurar .env a partir de .env.example

php artisan migrate

php artisan application:key

## Puesta en marcha

En una terminal dejar en ejecución 
php artisan serve

En otra terminal dejar en ejecución 
npm run dev

## Aplicacion Sponsors

Alberto Mozo



## License

