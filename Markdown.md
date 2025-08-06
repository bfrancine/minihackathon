# MiniHackathon
## Render
Render es un proveedor de servisio en la nube tipo PaaS que permite desplegar aplicaciones web. Se encarga de provicionar servidores, despliegue contunuo con github/lab.

## Despliegue de una app Laravel
### Primer paso
El primer paso es crear un proyecto en laravel y hacer un repositorio en GitHub o GitLab donde se realice el primer commit.
### Segundo paso
Ingresar a render.com y crear una cuenta
### tercer paso
Dentro de render se debe de crear una base de datos tipo postgresql y se debe de configurar lo que se pide, en esta parte se deja basicamente que igual
### Cuarto paso
Se crea un web server, donde al crearlo se selecciona la opción del github que se va a utilizar.
### Quinto paso
Se debe de configurar todo, en la parte de variables de entorno se deben de colocar varias variables de entorno de la misma base de datos que se está utilizando para sí poder crear la conexión de manera exitosa.
## Desplegar la app
Se deben de subir todos los commits y desplegarla.

## Comandos utilizados 
``` bash
php artisan config:clear && php artisan cache:clear && php artisan config:cache

chmod -R 775 bootstrap/cache

php artisan key:generate --show

RUN mkdir -p storage && mkdir -p bootstrap/cache && chmod -R 755 storage bootstrap/cache
```
## URL Publica
https://minihackathon-7c2i.onrender.com/
