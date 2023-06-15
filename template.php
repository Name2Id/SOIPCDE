<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<title>Ramiro S back N</title>
    <link rel="stylesheet" href="./css.css">
</head>
<body>
	<div class="contenedor">
		<header class="header">
			<h2>SOIPCDE <em>Sistema para la Organizacion e Integracion de Paginas
                Con Contenido Dinamico Y Estatico.</em></h2>
		</header>
		<main class="contenido">
			<h1>Como se crea un unico punto de acceso.</h1>
			<p>
                Para obtener un unico punto de acceso
                se necesitan de dos archivos esencialmente
                el archivo .htaccess y el archivo index
				<br><br>
                en el archivo index debera estar almacenado
                el codigo referente al manejo de las rutas 
                mientras que en el archivo .htaccess deberas
                escribir el siguiente codigo :
				<br><br>
                <pre>
                Options -MultiViews
                RewriteEngine On 
                RewriteCond %{REQUEST_FILENAME} !-f 
                RewriteRule ^ YourFileName.php [QSA,L]
                </pre>
			</p>
            <h2>el index</h2>
            <p>
                <?php highlight_file('./index.php'); ?>
            </p>
            <h2>el Autoload</h2>
            <p>
            <?php highlight_file('./Autoload.php'); ?>
            </p>
            <h2>el Autoload Carga la Clase FiltrarUrl</h2>
            <p>
            <?php highlight_file('./FiltrarUrl.php'); ?>
            </p>
            <h2>el UrlsRegister</h2>
            <p>
            <?php highlight_file('./UrlsRegister.php'); ?>
            </p>
            <p>
                En este archivo almacenaremos 
                todas las rutas que seran validas
                en este proyecto.
            </p>
            <h2>el Switcher</h2>
            <p>
            <?php highlight_file('./Switcher.php'); ?>
            </p>
            <p>
                El Switcher se encarga de verificar
                que el url ingresado por el navegador
                este registrado y una vez se verifica 
                su existencia se procede a realizar
                la busqueda de las acciones requeridas.
            </p>
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