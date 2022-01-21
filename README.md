## Requerimientos

- Servidor web, apache o nginx.
- PHP v8.x
- composer

## Configuración de entorno local

Ya descargado el repositorio, deberán de correr los siguientes comando en su terminal.

- `git branch` para conocer en que rama de git se encuentran trabajando.
- `composer install` para asegurarse de tener las dependencias instaladas. Se deberá crear una carpeta dentro de la raiz de su proyecto (vendor).
- copiar el archivo `.env.example` a un nuevo archivo llamado `.env`. Corroborar los datos sean adecuados para la coneción a la BD.

### Sail
- `./vendor/bin/sail up -d` en caso de utilizar sail (Docker) para iniciar su contener.

### XAMPP
- Iniciar servicio de Base de datos desde el panel de control de XAMPP.
- Desde la raiz del proyecto `artisan start` para comenzar/levantar un servicio web.


Abrir en el navegador la página `http://localhost` para corroborar el proyecto ya se encuentre en funcionamiento.

# Base de datos

Correr las migraciones con el comando 

- `artisan migrate`
