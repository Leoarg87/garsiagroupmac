<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="category" content="Spanish, Spain">
    <meta name="description" content="empresa de alquiler y venta de coches y de materiales de construccion">
    <meta name="locality" content="Marbella, Malaga, España">
    <link rel="stylesheet" href="assets/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="assets/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
    <style>
        .img-fluid:hover {
            opacity: 0.5;
        }
    </style>

    <title>Compra Venta</title>
</head>

<body>
    <?php
    include("menu.php");
    ?>
    <div class="mt-5" style="background-image:linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(img/venta/banner.jpeg); padding-top: 7%;background-size: cover;height: 491px;">
    <h1 class="text-center mt-5" style="font-size: xxx-large; font-family: 'Impact';color: white">Garsia Group</h1>
        <h1 class="text-center mt-3" style="color:white"> Tu fidelidad, nuestro compromiso</h1>
    
    </div>
    <div class="mt-5" style="background-color:#891A1A">
        <h1 class="text-center p-3" style=" font-family: 'Impact'; color : white;">
            Nuestros vehículos
        </h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <button type="button" class="bg-white mt-5" data-toggle="modal" data-target=".bmw"><img src="img/venta/LandRover/4.jpeg" class="img-fluid" alt="LandRover" style="border-radius: 25%;"></button>
            </div>
            <div class="col">
                <button type="button" class="bg-white mt-5" data-toggle="modal" data-target=".mercedesC"><img src="img/venta/MercedesClaseC/1.jpeg" class="img-fluid" alt="Mercedes Clase C" style="border-radius: 25%;"></button>
            </div>
            <div class="col">
                <button type="button" class="bg-white mt-5" data-toggle="modal" data-target=".fordmustang"><img src="img/venta/FordMustang/1.jpeg" class="img-fluid" alt="fordmustang" style="border-radius: 25%;"></button>
            </div>

        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <button type="button" class="bg-white mt-5" data-toggle="modal" data-target=".mercedesE"><img src="img/venta/MercedesClaseE/1.jpeg" class="img-fluid" alt="MercedesClaseE" style="border-radius: 25%;"></button>
            </div>
            <div class="col">
                <button type="button" class="bg-white mt-5" data-toggle="modal" data-target=".skoda"><img src="img/venta/Skoda/1.jpg" class="img-fluid" alt="Skoda Fabia" style="border-radius: 25%;"></button>
            </div>
            <div class="col">
                <button type="button" class="bg-white mt-5" data-toggle="modal" data-target=".Mazda"><img src="img/venta/Mazda/1.jpg" class="img-fluid" alt="Mazda" style="border-radius: 25%;"></button>
            </div>

        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <button type="button" class="bg-white mt-5" data-toggle="modal" data-target=".volkswagen"><img src="img/venta/volkswagen/1.jpg" class="img-fluid" alt="volkswagen" style="border-radius: 25%;"></button>
            </div>
            <div class="col">
                <button type="button" class="bg-white mt-5" data-toggle="modal" data-target=".audi"><img src="img/venta/audi/1.jpg" class="img-fluid" alt="audi" style="border-radius: 25%;"></button>
            </div>
            <div class="col">
                <button type="button" class="bg-white mt-5" data-toggle="modal" data-target=".mustangblanco"><img src="img/venta/mustangblanco/1.jpeg" class="img-fluid" alt="mustangblanco" style="border-radius: 25%;"></button>
            </div>

        </div>

    </div>
    <!-- MODALES -->

    <!-- Land Rover -->

    <div class="modal fade bmw" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="container d-flex justify-content-center mt-3">
                    <div class="col-5">
                        <span aria-hidden="true" class="d-flex justify-content-center">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="img/venta/LandRover/1.jpeg" class="d-block w-100 img-fluid" alt="LandRover">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/venta/LandRover/2.jpeg" class="d-block w-100 img-fluid" alt="LandRover">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/venta/LandRover/3.jpeg" class="d-block w-100 img-fluid" alt="LandRover">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/venta/LandRover/4.jpeg" class="d-block w-100 img-fluid" alt="LandRover">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/venta/LandRover/5.jpeg" class="d-block w-100 img-fluid" alt="LandRover">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="container mt-3">
                    <div class="row d-flex justify-content-center">
                        <div class="col  d-flex justify-content-center">
                            <ul>
                                <li style="list-style-type:disc"> <b>Modelo:</b> LAND-ROVER Range Rover Evoque</li>
                                <li style="list-style-type:disc"> <b>Año:</b> 2016</li>
                                <li style="list-style-type:disc"> <b>Km:</b> 109.000 km</li>
                                <li style="list-style-type:disc"> <b>Carrocería:</b> 4x4 SUV</li>
                                <li style="list-style-type:disc"> <b>Color:</b> Blanco</li>
                                <li style="list-style-type:disc"> <b>Plazas:</b> 5</li>
                            </ul>
                        </div>
                        <div class="col  d-flex justify-content-center ">
                            <ul>
                                <li style="list-style-type:disc"> <b>Combustible:</b> Diesel</li>
                                <li style="list-style-type:disc"> <b>Transmisión:</b> Automático</li>
                                <li style="list-style-type:disc"> <b>Ubicación:</b> Málaga</li>
                                <li style="list-style-type:disc"> <b>Puertas:</b> 5</li>
                                <li style="list-style-type:disc"> <b>CV:</b> 150 cv</li>
                                <li style="list-style-type:disc"> <b>Cilindradas:</b> 1998 cc</li>
                                <li style="list-style-type:disc"> <b>Precio:</b> 23000€</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Land Rover -->

    <!-- mercedesC -->

    <div class="modal fade mercedesC" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="container d-flex justify-content-center mt-3">
                    <div class="col-5">
                        <span aria-hidden="true" class="d-flex justify-content-center">
                            <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="img/venta/MercedesClaseC/1.jpeg" class="d-block w-100 img-fluid" alt="MercedesClaseC">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/venta/MercedesClaseC/2.jpeg" class="d-block w-100 img-fluid" alt="MercedesClaseC">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/venta/MercedesClaseC/3.jpeg" class="d-block w-100 img-fluid" alt="MercedesClaseC">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/venta/MercedesClaseC/4.jpeg" class="d-block w-100 img-fluid" alt="MercedesClaseC">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/venta/MercedesClaseC/5.jpeg" class="d-block w-100 img-fluid" alt="MercedesClaseC">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="container mt-3">
                    <div class="row d-flex justify-content-center">
                        <div class="col  d-flex justify-content-center">
                            <ul>
                                <li style="list-style-type:disc"> <b>Modelo:</b> MERCEDES-BENZ Clase C C 220</li>
                                <li style="list-style-type:disc"> <b>Año:</b> 2014</li>
                                <li style="list-style-type:disc"> <b>Km:</b> 180.000 km</li>
                                <li style="list-style-type:disc"> <b>Carrocería:</b> Berlina</li>
                                <li style="list-style-type:disc"> <b>Color:</b> Gris / Plata</li>
                                <li style="list-style-type:disc"> <b>Plazas:</b>5</li>
                            </ul>
                        </div>
                        <div class="col  d-flex justify-content-center ">
                            <ul>
                                <li style="list-style-type:disc"> <b>Combustible:</b> Diesel</li>
                                <li style="list-style-type:disc"> <b>Transmisión:</b> Automático</li>
                                <li style="list-style-type:disc"> <b>Ubicación:</b> Málaga</li>
                                <li style="list-style-type:disc"> <b>Puertas:</b> 4</li>
                                <li style="list-style-type:disc"> <b>CV:</b> 170 cv</li>
                                <li style="list-style-type:disc"> <b>Cilindradas:</b> 2143cc</li>
                                <li style="list-style-type:disc"> <b>Precio:</b> 21900€</li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Mercedes C -->
    <!-- ford mustang -->

    <div class="modal fade fordmustang" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="container d-flex justify-content-center mt-3">
                    <div class="col-5">
                        <span aria-hidden="true" class="d-flex justify-content-center">
                            <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="img/venta/FordMustang/1.jpeg" class="d-block w-100 img-fluid" alt="FordMustang">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/venta/FordMustang/2.jpeg" class="d-block w-100 img-fluid" alt="FordMustang">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/venta/FordMustang/3.jpeg" class="d-block w-100 img-fluid" alt="FordMustang">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/venta/FordMustang/4.jpeg" class="d-block w-100 img-fluid" alt="FordMustang">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/venta/FordMustang/5.jpeg" class="d-block w-100 img-fluid" alt="FordMustang">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="container mt-3">
                    <div class="row d-flex justify-content-center">
                        <div class="col  d-flex justify-content-center">
                            <ul>
                                <li style="list-style-type:disc"> <b>Modelo:</b> FORD Mustang 5.0 TiVCT V8</li>
                                <li style="list-style-type:disc"> <b>Año:</b> 2018</li>
                                <li style="list-style-type:disc"> <b>Km:</b> 20.000 km</li>
                                <li style="list-style-type:disc"> <b>Carrocería:</b> Cabrio</li>
                                <li style="list-style-type:disc"> <b>Color:</b> Granate</li>
                                <li style="list-style-type:disc"> <b>Plazas:</b> 4</li>
                            </ul>
                        </div>
                        <div class="col  d-flex justify-content-center ">
                            <ul>
                                <li style="list-style-type:disc"> <b>Combustible:</b> Gasolina</li>
                                <li style="list-style-type:disc"> <b>Transmisión:</b> Automático</li>
                                <li style="list-style-type:disc"> <b>Ubicación:</b> Málaga</li>
                                <li style="list-style-type:disc"> <b>Puertas:</b> 2</li>
                                <li style="list-style-type:disc"> <b>CV:</b> 418 cv</li>
                                <li style="list-style-type:disc"> <b>Cilindradas:</b> 4951 cc</li>
                                <li style="list-style-type:disc"> <b>Precio:</b> 50900€</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- ford mustang -->
    <!-- mercedes E -->

    <div class="modal fade mercedesE" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="container d-flex justify-content-center mt-3">
                    <div class="col-5">
                        <span aria-hidden="true" class="d-flex justify-content-center">
                            <div id="carouselExampleControls3" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="img/venta/MercedesClaseE/1.jpeg" class="d-block w-100 img-fluid" alt="MercedesClaseE">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/venta/MercedesClaseE/2.jpeg" class="d-block w-100 img-fluid" alt="MercedesClaseE">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/venta/MercedesClaseE/3.jpeg" class="d-block w-100 img-fluid" alt="MercedesClaseE">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/venta/MercedesClaseE/4.jpeg" class="d-block w-100 img-fluid" alt="MercedesClaseE">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/venta/MercedesClaseE/5.jpeg" class="d-block w-100 img-fluid" alt="MercedesClaseE">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls3" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls3" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="container mt-3">
                    <div class="row d-flex justify-content-center">
                        <div class="col  d-flex justify-content-center">
                            <ul>
                                <li style="list-style-type:disc"> <b>Modelo:</b> MERCEDES-BENZ Clase E E 220</li>
                                <li style="list-style-type:disc"> <b>Año:</b> 2019</li>
                                <li style="list-style-type:disc"> <b>Km:</b> 161.800 km</li>
                                <li style="list-style-type:disc"> <b>Carrocería:</b> Berlina</li>
                                <li style="list-style-type:disc"> <b>Color:</b> Gris / Plata</li>
                                <li style="list-style-type:disc"> <b>Plazas:</b> 5</li>
                            </ul>
                        </div>
                        <div class="col  d-flex justify-content-center ">
                            <ul>
                                <li style="list-style-type:disc"> <b>Combustible:</b> Diesel</li>
                                <li style="list-style-type:disc"> <b>Transmisión:</b> Automático</li>
                                <li style="list-style-type:disc"> <b>Ubicación:</b> Málaga</li>
                                <li style="list-style-type:disc"> <b>Puertas:</b> 4</li>
                                <li style="list-style-type:disc"> <b>CV:</b> 194 cv</li>
                                <li style="list-style-type:disc"> <b>Cilindradas:</b> 1950 cc</li>
                                <li style="list-style-type:disc"> <b>Precio:</b> 37.500 €</li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Mercedes E -->
    <!-- Skoda Fabia  -->

    <div class="modal fade skoda" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="container d-flex justify-content-center mt-3">
                    <div class="col-5">
                        <span aria-hidden="true" class="d-flex justify-content-center">
                            <div id="carouselExampleControls4" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="img/venta/Skoda/1.jpg" class="d-block w-100 img-fluid" alt="Skoda Fabia">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/venta/Skoda/2.jpg" class="d-block w-100 img-fluid" alt="Skoda Fabia ">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/venta/Skoda/3.jpg" class="d-block w-100 img-fluid" alt="Skoda Fabia">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/venta/Skoda/4.jpg" class="d-block w-100 img-fluid" alt="Skoda Fabia">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/venta/Skoda/5.jpg" class="d-block w-100 img-fluid" alt="Skoda Fabia">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls4" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls4" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="container mt-3">
                    <div class="row d-flex justify-content-center">
                        <div class="col  d-flex justify-content-center">
                            <ul>
                                <li style="list-style-type:disc"> <b>Modelo:</b> SKODA Fabia 1.2 12v</li>
                                <li style="list-style-type:disc"> <b>Año:</b> 2013</li>
                                <li style="list-style-type:disc"> <b>Km:</b> 106.000 km</li>
                                <li style="list-style-type:disc"> <b>Carrocería:</b> Berlina</li>
                                <li style="list-style-type:disc"> <b>Color:</b> Gris / Plata</li>
                                <li style="list-style-type:disc"> <b>Plazas:</b> 5</li>
                            </ul>
                        </div>
                        <div class="col  d-flex justify-content-center ">
                            <ul>
                                <li style="list-style-type:disc"> <b>Combustible:</b> Gasolina</li>
                                <li style="list-style-type:disc"> <b>Transmisión:</b> Manual</li>
                                <li style="list-style-type:disc"> <b>Ubicación:</b> Málaga</li>
                                <li style="list-style-type:disc"> <b>Puertas:</b> 5</li>
                                <li style="list-style-type:disc"> <b>CV:</b> 60 cv</li>
                                <li style="list-style-type:disc"> <b>Cilindradas:</b> 1198 cc</li>
                                <li style="list-style-type:disc"> <b>Precio:</b> 5450 €</li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Skoda Fabia -->
    <!-- Mazda  -->

    <div class="modal fade Mazda" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="container d-flex justify-content-center mt-3">
                    <div class="col-5">
                        <span aria-hidden="true" class="d-flex justify-content-center">
                            <div id="carouselExampleControls5" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="img/venta/Mazda/1.jpg" class="d-block w-100 img-fluid" alt="Mazda">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/venta/Mazda/2.jpg" class="d-block w-100 img-fluid" alt="Mazda ">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/venta/Mazda/3.jpg" class="d-block w-100 img-fluid" alt="Mazda">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/venta/Mazda/4.jpg" class="d-block w-100 img-fluid" alt="Mazda">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/venta/Mazda/5.jpg" class="d-block w-100 img-fluid" alt="Mazda">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls5" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls5" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="container mt-3">
                    <div class="row d-flex justify-content-center">
                        <div class="col  d-flex justify-content-center">
                            <ul>
                                <li style="list-style-type:disc"> <b>Modelo:</b> MAZDA CX5 2.2</li>
                                <li style="list-style-type:disc"> <b>Año:</b> 2014</li>
                                <li style="list-style-type:disc"> <b>Km:</b> 122.000 km</li>
                                <li style="list-style-type:disc"> <b>Carrocería:</b> 4x4 SUV</li>
                                <li style="list-style-type:disc"> <b>Color:</b> Rojo</li>
                                <li style="list-style-type:disc"> <b>Plazas:</b> 5</li>
                            </ul>
                        </div>
                        <div class="col  d-flex justify-content-center ">
                            <ul>
                                <li style="list-style-type:disc"> <b>Combustible:</b> Diesel</li>
                                <li style="list-style-type:disc"> <b>Transmisión:</b> Automático</li>
                                <li style="list-style-type:disc"> <b>Ubicación:</b> Málaga</li>
                                <li style="list-style-type:disc"> <b>Puertas:</b> 5</li>
                                <li style="list-style-type:disc"> <b>CV:</b> 150 cv</li>
                                <li style="list-style-type:disc"> <b>Cilindradas:</b> 2191 cc</li>
                                <li style="list-style-type:disc"> <b>Precio:</b> 15980 €</li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Mazda -->
    <!-- volkswagen  -->

    <div class="modal fade volkswagen" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="container d-flex justify-content-center mt-3">
                    <div class="col-5">
                        <span aria-hidden="true" class="d-flex justify-content-center">
                            <div id="carouselExampleControls6" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="img/venta/volkswagen/1.jpg" class="d-block w-100 img-fluid" alt="volkswagen">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/venta/volkswagen/2.jpg" class="d-block w-100 img-fluid" alt="volkswagen ">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/venta/volkswagen/3.jpg" class="d-block w-100 img-fluid" alt="volkswagen">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/venta/volkswagen/4.jpg" class="d-block w-100 img-fluid" alt="volkswagen">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/venta/volkswagen/5.jpg" class="d-block w-100 img-fluid" alt="volkswagen">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls6" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls6" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="container mt-3">
                    <div class="row d-flex justify-content-center">
                        <div class="col  d-flex justify-content-center">
                            <ul>
                                <li style="list-style-type:disc"> <b>Modelo:</b> VOLKSWAGEN Touran Advance 1.6 TDI</li>
                                <li style="list-style-type:disc"> <b>Año:</b> 2016</li>
                                <li style="list-style-type:disc"> <b>Km:</b> 132.000 km</li>
                                <li style="list-style-type:disc"> <b>Carrocería:</b> Monovolumen</li>
                                <li style="list-style-type:disc"> <b>Color:</b> Azul</li>
                                <li style="list-style-type:disc"> <b>Plazas:</b> 7</li>
                            </ul>
                        </div>
                        <div class="col  d-flex justify-content-center ">
                            <ul>
                                <li style="list-style-type:disc"> <b>Combustible:</b> Diesel</li>
                                <li style="list-style-type:disc"> <b>Transmisión:</b> Automático</li>
                                <li style="list-style-type:disc"> <b>Ubicación:</b> Málaga</li>
                                <li style="list-style-type:disc"> <b>Puertas:</b> 5</li>
                                <li style="list-style-type:disc"> <b>CV:</b> 115 cv</li>
                                <li style="list-style-type:disc"> <b>Cilindradas:</b> 1598 cc</li>
                                <li style="list-style-type:disc"> <b>Precio:</b> 18.200 €</li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- volkswagen -->
    <!-- audi  -->

    <div class="modal fade audi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="container d-flex justify-content-center mt-3">
                    <div class="col-5">
                        <span aria-hidden="true" class="d-flex justify-content-center">
                            <div id="carouselExampleControls7" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="img/venta/audi/1.jpg" class="d-block w-100 img-fluid" alt="audi">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/venta/audi/2.jpg" class="d-block w-100 img-fluid" alt="audi ">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/venta/audi/3.jpg" class="d-block w-100 img-fluid" alt="audi">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/venta/audi/4.jpg" class="d-block w-100 img-fluid" alt="audi">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/venta/audi/5.jpg" class="d-block w-100 img-fluid" alt="audi">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls7" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls7" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="container mt-3">
                    <div class="row d-flex justify-content-center">
                        <div class="col  d-flex justify-content-center">
                            <ul>
                                <li style="list-style-type:disc"> <b>Modelo:</b> AUDI A8 3.0 TDI </li>
                                <li style="list-style-type:disc"> <b>Año:</b> 2016</li>
                                <li style="list-style-type:disc"> <b>Km:</b> 78.000 km</li>
                                <li style="list-style-type:disc"> <b>Carrocería:</b> Berlina</li>
                                <li style="list-style-type:disc"> <b>Color:</b> Negro</li>
                                <li style="list-style-type:disc"> <b>Plazas:</b> 5</li>
                            </ul>
                        </div>
                        <div class="col  d-flex justify-content-center ">
                            <ul>
                                <li style="list-style-type:disc"> <b>Combustible:</b> Diesel</li>
                                <li style="list-style-type:disc"> <b>Transmisión:</b> Automático</li>
                                <li style="list-style-type:disc"> <b>Ubicación:</b> Málaga</li>
                                <li style="list-style-type:disc"> <b>Puertas:</b> 4</li>
                                <li style="list-style-type:disc"> <b>CV:</b> 262 cv</li>
                                <li style="list-style-type:disc"> <b>Cilindradas:</b> 2967 cc</li>
                                <li style="list-style-type:disc"> <b>Precio:</b> 39.999 €</li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- audi -->
    <!-- mustangblanco  -->

    <div class="modal fade mustangblanco" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="container d-flex justify-content-center mt-3">
                    <div class="col-5">
                        <span aria-hidden="true" class="d-flex justify-content-center">
                            <div id="carouselExampleControls8" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="img/venta/mustangblanco/1.jpeg" class="d-block w-100 img-fluid" alt="mustangblanco">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/venta/mustangblanco/2.jpeg" class="d-block w-100 img-fluid" alt="mustangblanco ">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/venta/mustangblanco/3.jpeg" class="d-block w-100 img-fluid" alt="mustangblanco">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/venta/mustangblanco/4.jpeg" class="d-block w-100 img-fluid" alt="mustangblanco">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/venta/mustangblanco/5.jpeg" class="d-block w-100 img-fluid" alt="mustangblanco">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls8" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls8" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="container mt-3">
                    <div class="row d-flex justify-content-center">
                        <div class="col  d-flex justify-content-center">
                            <ul>
                                <li style="list-style-type:disc"> <b>Modelo:</b> FORD Mustang 2.3 EcoBoost </li>
                                <li style="list-style-type:disc"> <b>Año:</b> 2015</li>
                                <li style="list-style-type:disc"> <b>Km:</b> 125.000 km</li>
                                <li style="list-style-type:disc"> <b>Carrocería:</b> Cabrio</li>
                                <li style="list-style-type:disc"> <b>Color:</b> Blanco</li>
                                <li style="list-style-type:disc"> <b>Plazas:</b> 4</li>
                            </ul>
                        </div>
                        <div class="col  d-flex justify-content-center ">
                            <ul>
                                <li style="list-style-type:disc"> <b>Combustible:</b> Gasolina</li>
                                <li style="list-style-type:disc"> <b>Transmisión:</b> Automático</li>
                                <li style="list-style-type:disc"> <b>Ubicación:</b> Málaga</li>
                                <li style="list-style-type:disc"> <b>Puertas:</b> 2</li>
                                <li style="list-style-type:disc"> <b>CV:</b> 314 cv</li>
                                <li style="list-style-type:disc"> <b>Cilindradas:</b> 2300 cc</li>
                                <li style="list-style-type:disc"> <b>Precio:</b> 21.000 €</li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5" style="background-color:#891A1A">
        <h1 class="text-center p-3" style=" font-family: 'Impact'; color : white;">

            Mucho más que un compra-venta

        </h1>

    </div>
    </div>
    <!-- mustangblanco -->
    <div class="footer">
        <?php
        include('footer.php');
        ?>
    </div>
</body>

</html>