# Sistema de Gestión de Biblioteca

## Descripción

Sistema web desarrollado con Laravel para administrar los libros de una biblioteca. Permite registrar, consultar, editar y eliminar libros, además de gestionar el acceso mediante autenticación de usuarios.

## Tecnologías utilizadas

- PHP 8.3
- Laravel 13
- MySQL
- HTML y CSS
- Blade
- Tailwind CSS
- Alpine.js

## Funcionalidades

- Registro de usuarios.
- Inicio y cierre de sesión.
- Gestión de libros (CRUD).
- Registro de nuevos libros.
- Consulta de libros registrados.
- Visualización de detalles.
- Edición de información.
- Eliminación de libros.
- Validación de campos obligatorios.
- Validación de ISBN duplicados.
- Protección de rutas mediante middleware de autenticación.

## Requisitos

- PHP 8.3 o superior.
- Composer.
- Node.js y npm.
- MySQL.
- Laragon (recomendado para Windows).

## Instalación

1. Clonar o descargar el repositorio.

2. Instalar las dependencias de PHP:

   ```bash
   composer install
   ```

3. Instalar las dependencias de JavaScript:

   ```bash
   npm install
   ```

4. Crear el archivo de configuración:

   ```bash
   cp .env.example .env
   ```

   En Windows también se puede copiar manualmente `.env.example` y renombrar la copia como `.env`.

5. Generar la clave de la aplicación:

   ```bash
   php artisan key:generate
   ```

6. Crear una base de datos MySQL llamada:

   `biblioteca_db`

7. Configurar la conexión a MySQL en el archivo `.env`.

8. Ejecutar las migraciones:

   ```bash
   php artisan migrate
   ```

9. Compilar los recursos:

   ```bash
   npm run build
   ```

10. Iniciar el servidor:

   ```bash
   php artisan serve
   ```

11. Abrir en el navegador:

   http://127.0.0.1:8000

## Estructura principal

- `app/Models`: modelos de la aplicación.
- `app/Http/Controllers`: controladores.
- `routes`: definición de rutas.
- `resources/views`: vistas de la interfaz.
- `database/migrations`: estructura de las tablas de la base de datos.
- `.env`: configuración local y conexión a la base de datos.
- `.env.example`: ejemplo de configuración.

## Autora

Proyecto académico individual desarrollado para la materia de Desarrollo Web Backend.
