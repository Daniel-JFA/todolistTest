<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
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

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


Todo List App
Esta aplicación es un ejemplo sencillo de una lista de tareas creada con Node, Livewire y Tailwindcss.
Este código es una aplicación web de lista de tareas creada utilizando el framework Laravel y la base de datos MySQL. Permite a los usuarios agregar, y eliminar tareas de su lista de tareas personal como se pidio en la prueba.

La aplicación se compone de un controlador, una vista y un modelo. El controlador maneja las solicitudes HTTP y realiza la lógica del negocio. La vista define la interfaz de usuario de la aplicación y muestra la lista de tareas al usuario. El modelo se encarga de interactuar con la base de datos y realizar las operaciones de CRD (crear, leer,  y eliminar) en la tabla de tareas.

Requisitos
PHP  >= 7.3
Laravel 7.X
Node.js
Livewire
Tailwindcss
MariaDB MySql
Instalación
Clonar el repositorio:
bash
siga los siguientes pasos para instalar y ejecutar la aplicación:

Clone el repositorio en su computadora
Ejecute composer install para instalar las dependencias del proyecto
Configure las variables de entorno en el archivo .env
Ejecute php artisan key:generate para generar una nueva clave de aplicación
Ejecute php artisan migrate para crear la tabla de tareas en la base de datos
Ejecute php artisan serve para iniciar el servidor local
Acceda a la aplicación en su navegador web en la dirección http://localhost:8000
git clone https://github.com/Daniel-JFA/todolistTest.git
Instalar las dependencias del proyecto:
composer install
npm install
Configurar la base de datos en el archivo .env.

Ejecutar las migraciones y el seeder para crear la tabla de tareas si requiere datos ficticios:

php artisan migrate
php artisan db:seed
Compilar los assets:
npm run dev
Iniciar el servidor:
php artisan serve
Uso
Puede acceder a la aplicación en su navegador visitando http://localhost:8000. En la página principal encontrará una lista de tareas pendientes. Puede agregar una nueva tarea utilizando el formulario de creación y eliminar una tarea utilizando el botón "Eliminar".

Créditos
Creado por Daniel Florez.


Todo List App
This is a simple example of a to-do list created with Node, Livewire, and Tailwindcss.

This code is a web application of a to-do list created using the Laravel framework and the MySQL database. It allows users to add and delete tasks from their personal to-do list, as requested in the test.

The application consists of a controller, a view, and a model. The controller handles HTTP requests and performs business logic. The view defines the user interface of the application and displays the to-do list to the user. The model interacts with the database and performs CRUD operations (create, read, and delete) on the tasks table.

Requirements
PHP >= 7.3
Laravel 7.X
Node.js
Livewire
Tailwindcss
MariaDB MySql

Installation
Follow these steps to install and run the application:

Clone the repository to your computer
Run composer install to install the project dependencies
Configure the environment variables in the .env file
Run php artisan key:generate to generate a new application key
Run php artisan migrate to create the tasks table in the database
Run php artisan serve to start the local server
Access the application in your web browser at http://localhost:8000

git clone https://github.com/Daniel-JFA/todolistTest.git

Install the project dependencies:
composer install
npm install
Configure the database in the .env file.

Run the migrations and seeder to create the tasks table if you need fake data:
php artisan migrate
php artisan db:seed

Compile the assets:
npm run dev

Start the server:
php artisan serve

Usage
You can access the application in your browser by visiting http://localhost:8000. On the homepage, you will find a list of pending tasks. You can add a new task using the creation form and delete a task using the "Delete" button.

Credits
Created by Daniel Florez.
