<!--
	Plantilla Base de PHP con MySQL
	Autor: Gabriel Barrón Rodríguez
-->
<!DOCTYPE html>
<html lang="es">

<head>
    <title> Proyecto CBTis 75</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Ultimos archivos compilados CSS BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <link rel="stylesheet" href="http://<?= $_SERVER['SERVER_NAME'] ;?>/base/assets/css/style.css">
</head>

<body>
    <!--  Header -->
    <header>
        <?php
			require_once('header.php');
		?>
    </header>

    <!-- Contenido -->
    <section>
        <div class="container contenido">
            <?php
			// carga el archivo routing.php para direccionar a la página .php que se incrustará entre la header y el footer
			require_once('./controller/routing.php');
			?>
        </div>
    </section>

    <!-- Pie de Página -->
    <footer>
        <?php
		include_once('footer.php');
		?>
    </footer>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src='http://<?= $_SERVER['SERVER_NAME'] ;?>/base/assets/js/app.js'></script>
</body>

</html>