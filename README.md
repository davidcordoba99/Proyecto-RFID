# Proyecto-RFID
Proyecto RFID:

Nuestro proyecto consiste en un sistema para que los alumnos/profesores/trabajadores fichen.

Simulando un arduino con RFID (ya que no hemos conseguido los recursos necesarios).

OBJETIVO: Nuestro proyecto debe tener dos partes 

1. La parte en la que el usuario ficha, luz roja no esta registrado ese codigo en la Base de datos y luz verde se inserta en la base de datos la hora en la que has entrado con el codigo.
2. Parte administrativa, la cual se usara para ver estadisticas, crear usuarios nuevos del sistema MISSING y poder hacer modificaciones en ellos.

## REALIDAD: 

1. Esta parte es simulada, y como no teniamos los recursos suficientes, hemos creado algo muy basico y simple para no perder demasiado tiempo en el cual 0 y 1 son luz roja y verde.(no se inserta nada en la base de datos porque no queriamos perder tiempo en este apartado del proyecto, ya que se valoraba mas el backend)
2. La administración esta hecha, no terminada, pero tenemos estadisticas, todos las paginas se renderizan por lo tanto no hay html visibles, las estadisticas estan (mejorable pero con algo mas de timepo). La base de todo esta solo quedaria meterle horas al css y pensar en los comandos y tablas sql.


Como usar el proyecto:

## DIRECTORIO:

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

## INSTALACION

1. Descargar el rar y el sql que estan en este repositorio.
2. Descomprimir el rar en el directorio de vuestra pagina web
3. importar el sql dependiendo que programa o servicio useis sera un comando: u otro, recomendamos mysql comando "mysql -u <username> -p <databasename> < missing.sql". **importante la base de datos puede que tengais que crearla manualmente**
4. **Acceder a localhost y elegir la carpeta de PHP, que es la nuestro proyecto.**
5. Para que el comando empleado en php se conecte a las bases de datos, puede que el usuario tenga que cambiar dicha opcion en el codigo.
        
## INFORMACION TECNICA

### TWIG
Twig es una herramienta que solo hace falta instalar una vez. Dicha herramienta nos permite renderizar los html y aparte poder enviar/recibir datos desde php. Por ejemplo: En este ejemplo podemo apreciar como un el log.php tenemos este codigo el cual nos renderiza y envia un error mediante php a una pagina html.
                
                
### SESSIONS    
Ya que usamos la renderizacion proporcionada de twig, no usaremos HTML, sino que nuestra herramienta y lenguaje de trabajo sera solamente php. Para controlar los php nos hacemos valer de la herrmamienta SESSION la cual nos permite controlar y dirigir el trafico de usuarios logueado en nuestro sistema. Ejemplo grafico: 
                
### CONEXION A MYSQL    
En nuestro proyecto, al igual que en el resto de proyectos, tenemos una base de datos en la cual recopilamos y almacenamos los datos de basicamente todo lo que pasa en nuestro sistema (administradores,usuarios,codigos...). La manera de conectarse a las bases de datos, es decir el codigo implementado es el siguiente:
                
### JSON 
Mediante json podremos enviar y pragmar los datos de la base de datos dentro del esquema analitico que hemos creado (esquemadatos.php/html)ya que dentro de este html nos encontramos con la problematica de que utiliza el lenguaje JavaScript para usar los datos. El codigo utilizado es el siguiente: 
                
### CSS
Hemos utilizado nuestro propio css para decorar y personalizar los html empleados. Ejemplo:
