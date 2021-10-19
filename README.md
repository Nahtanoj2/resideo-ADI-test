# resideo-ADI-test
Repositorio para la prueba técnica de Resideo ADI

Esta prueba es el primer ejemplo del correo electrónico.

Prueba hecha con Laravel, VUE, Inertia.js, tailwind y MySQL.

Para correr el proyecto se necesita tener PHP 8, Composer, NPM y una base de datos.

Pasos para correr el proyecto.
  1. Descargar el repositorio
  2. Comprobar que ya se tenga instalado [PHP 8](https://windows.php.net/download#php-8.0) con [Composer](https://getcomposer.org/download/).
  3. Instalar [Node](https://nodejs.org) para poder usar NPM
  4. Instalar las dependencias de Laravel con el comando `composer install`
  5. Instalar la base de datos que yace en la raiz de este proyecto con el nombre __/database_dump.sql__
  -  Se puede usar la base de datos que se desee. Solo hay que modificar el archivo _.env_ para señalar que se use la base de datos deseada
  6. Modificar el archivo _.env_ para que quede a corde a la configuración de la base de datos
  7. Instalar dependencias de NPM con el comando `npm install`
  8. Instalar dependencias de Laravel Mix con el comando `npx mix`
  9. Volver a ingresar el comando `npx mix` para compilar estilos y JavaScript
  -  Si salta un error, actualizar con el comando `npm update vue-loader` y volver a intentar.
  10. Levantar el servidor PHP con el comando `php artisan serve`
  11. Visitar la página http://127.0.0.1:8000 para ver el resultado
