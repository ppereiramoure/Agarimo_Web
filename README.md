# Agarimo_Web

Para hacer la pagina de Agarimo primero tenemos que crear un proyecto nuevo con las carpetas necesarias en este caso "Wordpress/html" y una vez dentro creamos el docker-compose.yml y usamos el comando "docker-compose up -d" y ya tendriamos nuestro contenedor de wordpress creado lo sigiente es crear un tema Child para ello lo primero que haremos es dar permisos a la carpeta "Themes" con el comando "sudo chmod -R 777 Themes" para poder escribir dentro de ese directorio, ahora cogemos el tema que queremos hacer un child y creamos nuestro directorio, en este caso "twentyseventeen-child" una vez creado dentro del tema creamos los fichero "style.css" y "functions.php" y dentro escribimos, en caso del functions tenemos que poner el codigo para que el child referencie al tema padre y en el style tenemos que poner unas lineas de texto comentadas para que nos conecte con el padre.
Lo siguientes es entrar en nuestra pagina de wordpress y empezar a personalizar nuestro tema.

# Capturas

![Image text](https://github.com/ppereiramoure/Agarimo_Web/blob/main/Captura%20de%20pantalla%20de%202022-03-29%2010-53-23.png)
![Image text](https://github.com/ppereiramoure/Agarimo_Web/blob/main/Captura%20de%20pantalla%20de%202022-03-29%2011-04-16.png)
![Image text](https://github.com/ppereiramoure/Agarimo_Web/blob/main/Captura%20de%20pantalla%20de%202022-03-29%2011-09-56.png)
