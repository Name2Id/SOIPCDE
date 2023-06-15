<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background: #E9ECF4;
            color: #000;
            font-family: 'Roboto', sans-serif;
        }

        .contenedor {
            width: 90%;
            max-width: 1000px;
            margin: 20px auto;
            display: grid;
            grid-gap: 20px;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(4, auto);

            grid-template-areas: "header header header"
                                "contenido contenido contenido"
                                "footer footer footer";
        }

        .contenedor > div,
        .contenedor .header,
        .contenedor .contenido,
        .contenedor .sidebar,
        .contenedor .footer {
            background: #fff;
            padding: 20px;
            border-radius: 4px;
        }

        .contenedor .header {
            background: #12203E;
            color: #fff;
            grid-area: header;
        }

        .contenedor .contenido {
            grid-area: contenido;
        }

        .contenedor .footer {
            background: #12203E;
            color: #fff;
            grid-area: footer;
        }
    </style>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<title>Layout de Sitio Web con CSS GRID</title>
</head>
<body>
	<div class="contenedor">
		<header class="header">
			<h2>Autoload <em>ERROR.</em></h2>
		</header>
		<main class="contenido">
			<h1>NO SE CARGO LA CLASE '<?php echo $class; ?>'.</h1>
		</main>
		<footer class="footer">
			<h3>&copy; Ramiro G. 2023.</h3>
		</footer>
	</div>
</body>
</html>