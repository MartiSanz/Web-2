<!DOCTYPE html>
        <html lang="en">
        <head>
            <!-- BASE va definido primero, es buena practica -->
            <!-- php con echo es mala practica -->
            <base href="<?php echo BASE_URL ?>" />
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="css/style.css">
            <title>Calculadora</title>
        </head>

        <body>
            <nav id="main-nav">
                <!-- CAMBIAN las href por referencias simples (gracias a lo configurado en .htaccess) sin necesidad de poner .php-->
                <ul>
                    <li><a href="home">Calculadora</a></li>
                    <li><a href="pi">Numero Pi</a></li>
                    <li><a href="about">Acerca de los autores</a></li>

                </ul>
            </nav>