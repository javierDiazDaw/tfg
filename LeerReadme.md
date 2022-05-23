Buenas, he tenido bastantes problemas con el proyecto y he querido hacerlo yo solo todo lo posible hasta el final.

En primer lugar, he de decir que he querido hacer el proyecto mediante Laravel basándome en un trabajo anterior de clase que hicimos con Javi relacionado con una biblioteca.
Resulta que al renombrar archivos y adaptarlo a este proyecto me da errores y he intentado de todas las maneras posibles pero no he sido capaz. También he intentado desplegar la app
mediante webhost pero no lo he conseguido aún.

Voy a poner como pueda las instrucciones para que se pueda desplegar instalando laravel y poder ver al menos lo que tengo hecho hasta ahora. Perdonad por no tenerlo todos los requisitos
de este tercer hito a tiempo.

******Instrucciones*****

1. Creamos el proyecto en la terminal con composer create-project --prefer-dist laravel/laravel
proyecto-laravel.

2. Instalamos laravel con composer global require laravel/installer

3. Introducimos el comando php artisan serve dentro del proyecto

4. Instalar breeze mediante composer: composer require laravel/breeze --dev

5. Instalamos breeze: php artisan breeze:install

6. Instalación de paquetes node: npm install

7. Compilamos los archivos .scss y .js: npm run dev

8. Introducimos mi base de datos en phpMyAdmin

9. En la terminal escribimos php artisan migrate

10. Nos da la opción de registrarnos y ponemos lo siguiente para parte de administrador: 

	nombre: javier.diaz.roman.al@iespoligonosur.org
	contraseña: developer
	

Un saludo, Javier Díaz.

