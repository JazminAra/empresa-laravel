<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## PROJECT DESCRIPTION

- The routes are login, contact, us and people.
- It is executed with php artisan serve First, the project is created with the command composer create-project laravel/laravel PROJECTNAME but having XAMPP and download and install https://getcomposer.org/Composer-Setup.exe Then we open the project in the terminal cd PROJECTNAME The main layout of the views with Bootstrap, has page navigation with header and footer. Controllers were used with the command php artisan make:controller CONTROLLERNAME --reosource with the most used methods index(), create(), store(), show(), edit(), update() and destroy().
- We connect the DB in the .env file:
   DB_DATABASE=laravel
   DB_USERNAME=root
   DB_PASSWORD=
- The DB is created in phyMyAdmin. Migrations were used with the php artisan migrate command and update migrations php artisan migrate:fresh
- Models were used php artisan make:model MODELNAME -m
- Records were inserted into the DB with new routes using route resource and FormRequestValidation with validations in the fields, messages were displayed with the php artisan make:request CreateROUTE_NAMERequest command and rules were added
- Deleting and updating records with Eloquent was implemented, a contact form with validations and translating the validations, the sending to an email was processed with the php artisan make:mail command to display it in Mailtrap.
- Flash Messages were implemented to other processes.
- User Login and Registration was implemented for the system
- Middlewares were added to verify the logged in user and in the routes
- Images were added in person details and in the DB table, they were shown as Boostrap cards and the images were validated
- Update and Delete Images was implemented, the images were optimized, in Events and Listeners with the php artisan event: generate command.
- Queues or Work Queues were added in Laravel with the php artisan queue: table command and the php artisan queue: work is turned on
- Delete and Update Categories were implemented in people, also in the relational DB table and the Categories were selected in the Form and People were filtered by Categories.

## DESCRIPCIÓN DEL PROYECTO

- Las rutas son login, contacto, nosotros y personas.
- Se ejecuta con php artisan serve
Primero se crea el proyecto con el comando composer create-project laravel/laravel NOMBREPROYECTO pero teniendo el XAMPP y descargar e instalar el https://getcomposer.org/Composer-Setup.exe
Luego abrimos el proyecto en el terminal cd NOMBREPROYECTO
El layout principal de las vistas con Bootstrap, tiene navegación de pagina con header y footer. Se utilizo controladores con el comando php artisan make:controller NOMBRECONTROLADOR --reosource con métodos mas usados index(), create(), store(), show(), edit(), update() y destroy(). 
- Conectamos la BD en el archivo .env :
  DB_DATABASE=laravel
  DB_USERNAME=root
  DB_PASSWORD=
- Se crea la bd en el phyMyAdmin. Se utilizo migraciones con el comando php artisan migrate y actualizar migraciones php artisan migrate:fresh
- Se utilizo modelos php artisan make:model NOMBREMODELO -m
- Se inserto resigtros a la BD con nuevas rutas utilizando route resource y FormRequestValidation con validaciones en los campos se muestra mensajes con el comando php artisan make:request CreateNOMBRERUTARequest y se agrego reglas
- Se implemento eliminar y actualizar registros con Eloquent, un formulario de contacto con validaciones y traducir las validaciones, se proceso el envió a un email con el comando php artisan make:mail para visualizarlo en Mailtrap.
- Se implemento Mensajes Flash a otros procesos.
- Se implemento el Login y Registro de Usuarios para el sistema
- Se añadió el Middlewares para verificar el usuario logueado y en las rutas
- Se agrego imágenes en detalles de personas y en la tabla de la BD, se mostro como tarjetas o cards de Boostrap y se valido las imágenes
- Se implemento Actualizar y Eliminar Imágenes,se optimizo las imágenes, en Eventos y Listeners con el comando php artisan event:generate.
- Se añadio Queues o Colas de Trabajo en laravel con el comando php artisan queue:table y se enciende el php artisan queue:work
- Se implemento Eliminar y Actualizar Categorías en personas, también en la tabla BD relacional y se selecciona las Categorías en el Form y se filtro Personas por Categorías.

