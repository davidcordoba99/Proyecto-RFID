# Proyecto-RFID
Proyecto RFID:

Nuestro proyecto consiste en un sistema para que los alumnos/profesores/trabajadores fichen.

Simulando un arduino con RFID (ya que no hemos conseguido los recursos necesarios).

OBJETIVO: Nuestro proyecto debe tener dos partes 

1. La parte en la que el usuario ficha, luz roja no esta registrado ese codigo en la Base de datos y luz verde se inserta en la base de datos la hora en la que has entrado con el codigo.
2. Parte administrativa, la cual se usara para ver estadisticas, crear usuarios nuevos del sistema MISSING y poder hacer modificaciones en ellos.

#REALIDAD: 

1. Esta parte es simulada, y como no teniamos los recursos suficientes, hemos creado algo muy basico y simple para no perder demasiado tiempo en el cual 0 y 1 son luz roja y verde.(no se inserta nada en la base de datos porque no queriamos perder tiempo en este apartado del proyecto, ya que se valoraba mas el backend)
2. La administración esta hecha, no terminada, pero tenemos estadisticas, todos las paginas se renderizan por lo tanto no hay html visibles, las estadisticas estan (mejorable pero con algo mas de timepo). La base de todo esta solo quedaria meterle horas al css y pensar en los comandos y tablas sql.


Como usar el proyecto:

#DIRECTORIO:

PHP
|
|--->loginadmin // Aqui dentro esta la parte administrativa. Parte 2 (parte administrativa)


|--->arducode // Aqui dentro esta la parte que simula el arduino. Parte 1 (Sinceramente no le haria caso a la parte 1 ya que la hemos desatendido completamente esta solo para hacer pruebas)


        A partir de aqui nos centraremos en describir la parte admnistrativa y como hacer un buen uso.
        
        
        
|--->El primer php al que accederemos es el PHP llamado index.html (el cual mediante TWIG hemos comvertido a php) el cual sera la primera base del proyecto, en este php controlaremos el inicio de sesion de los adminisradores, este php esta conectado a nuestra base de datos llamada Missing en MSQL, dentro de dicha base de datos tenemos una tabla llamada Admin, si en esta base de datos se haya el usuario (con su respectiva contraseña) pasara el primer por asi decirlo el primer control de autenticidad. En caso de que el usuario que se este intentando introducir no se encuentre en la base de datos, volvera a aparecer la pantalla de loginadmin.php pero esta vez con un mensaje de error de inicio. 



|--->Si hemos accedido con un usuario valido, es decir, con un usuario adminstrador nos hayaremos en el php llamado showusers.php. En este php nos apareceran los usuarios que son parte del sistema, es decir, los usuarios que supuestamente son poseedores de una tarjeta RFID o algun sistema de reconocimiento simlar. En este php tambien encontraremos 4 pestañas en la parte superior a la derecha (New User, Statistics, "el nombre del administrador logeado", Log out).



|--->En caso de que clikemos en la pestaña de New User, accederemos a un php llamado creacionuser.php el cual tiene como finalidad unica y principal la creacion de nuevos usuarios no administradores, es decir, la creacion de usuarios poseedores de RFID o similares.


|--->En caso de que clikemos en la pestaña de Statistics, accederemos a un php llamado esquemadatos.php, en pantalla veremos un esquema que a traves del lenguaje JSON, tendra acceso a una tabla de la base de datos missing anteriormente citada. Los datos que la tabla recopila son datos añadidos a mano ya que aun no contamos con datos suficientes como para analizarlos esquematicamente.


|--->En caso de que clikemos en la pestaña de "nombre del administrador logeado", accederemos a una pestaña en la cual se nos ofrecera la posibilidad de cambiar la contraseña ppreviavemnte preestblecida por una que el administrador desee, y otra opcion de cerrar la sesion.



|--->En caso de que clikemos en la pestaña de Log Out, el usuario administrador que tenga la sesion iniciada la cerrara y le consecuencia se le redirigira al index.php inicial.
