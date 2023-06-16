<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<title>Ramiro S back N</title>
    <link rel="stylesheet" href="./css.css">
    <link rel="stylesheet" href="./form.css">
    <link rel="stylesheet" href="./nav/nav.css">
</head>
<body>
	<div class="contenedor">
		<header class="header">
			<h2>SOIPCDE <em>Sistema para la Organizacion e Integracion de Paginas
                Con Contenido Dinamico Y Estatico.</em></h2>
            <p>
                Cada seccion de este documento muestra
                el fragmento de codigo correspondiente
                a un archivo en especifico.<br><br>

                Es muy facil para usted replicar este 
                sistema siguiendo esta guia ya que 
                simplemente tendra que crear los 
                archivos y copiar y pegar el codigo 
                correspondiente.
            </p>
            <?php require_once './nav/nav.html'; ?>
		</header>
		<main class="contenido">
			<?php $endpoint->content($path); ?>
		</main>
		<aside class="sidebar">
            <img src="./img/bgsidebar.jpg" alt="logo" width="100%" height="100%">
		</aside>
		<div class="widget-1">
			<h3>End Points =></h3>
		</div>
		<div class="widget-2">
            <div><ul>
                <li>
                    <p>
                    http://soipd.test/
                    </p>
                </li>
                <li>
                    <p>
                    http://soipd.test/login
                    </p>
                </li>
                <li>
                    <p>
                    http://soipd.test/register
                    </p>
                </li>
            </ul></div>
		</div>
		<footer class="footer">
			<h3>&copy; Ramiro G. 2023.</h3>
		</footer>
	</div>
</body>
</html>