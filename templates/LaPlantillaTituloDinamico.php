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
                                "contenido contenido sidebar"
                                "widget-1 widget-2 sidebar"
                                "footer footer footer";
        }

        .contenedor > div,
        .contenedor .header,
        .contenedor .contenido,
        .contenedor .footer {
            background: #fff;
            padding: 20px;
            border-radius: 4px;
        }

        .contenedor .sidebar {
            border-radius: 4px;
            padding: 1px;
        }

        .contenedor .header {
            background: #12203E;
            color: #fff;
            grid-area: header;
        }

        .contenedor .contenido {
            grid-area: contenido;
        }

        .contenedor .sidebar {
            grid-column: 3 / 4;
            background: #fAA43D;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100px;
            grid-area: sidebar;
            flex-wrap: wrap;
        }

        .contenedor .widget-1,
        .contenedor .widget-2 {
            background: #55a8fd;
            color: #fff;
            height: 100px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        }

        .contenedor .widget-1 {
            grid-area: widget-1;
        }

        .contenedor .widget-2 {
            grid-area: widget-2;
        }

        .contenedor .footer {
            background: #12203E;
            color: #fff;
            grid-area: footer;
        }

        @media screen and (max-width: 768px){
            .contenedor {
                grid-template-areas: "header header header"
                                "contenido contenido contenido"
                                "sidebar sidebar sidebar"
                                "widget-1 widget-1 widget-2"
                                "footer footer footer";
            }
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
			<h2>SOIPD <em>Sistema para la Organizacion e Integracion de Paginas Dinamicas.</em></h2>
		</header>
		<main class="contenido">
			<h1><?php echo $title; ?></h1>
			<p>
            Se solicita la pagina:
			</p>
		</main>
		<aside class="sidebar">
            <img src="/public/img/logo.jpg" alt="logo" width="100%" height="100%">
		</aside>
		<div class="widget-1">
			<h3>Enrutador Status</h3>
            <p>
                Detector de urls funcionando.
            </p>
		</div>
		<div class="widget-2">
			<h3>End Point</h3>
            <div>
            <br><br><br>
                <ul>
                    <li>
                        <p>
                        http://soipd.test/<?php echo $page; ?>
                        </p>
                    </li>
                </ul>
            </div>
		</div>
		<footer class="footer">
			<h3>&copy; Ramiro G. 2023.</h3>
		</footer>
	</div>
</body>
</html>