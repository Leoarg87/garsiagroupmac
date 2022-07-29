<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="category" content="Spanish, Spain">
    <meta name="description" content="empresa de alquiler y venta de coches y de materiales de construccion">
    <meta name="locality" content="Marbella, Malaga, España">
    <link rel="stylesheet"href="assets/reset.css" type="text/css" media="screen">
    <link rel="stylesheet"href="assets/style.css" type="text/css" media="screen">
    <link rel="stylesheet"href="https://pro.fontawesome.com/releases/v5.11.1/css/all.css">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <link rel="shortcut icon" type="image/x-icon"href="img/favicon.ico" />
    <title>Alquiler de Coches</title>
    <style>
        .img-fluid:hover {
            opacity: 0.5;
        }

        .scrollup {
            border-radius: 50%;
            font-size: 20px;
            color: #fff;
            background-color: #ae1102;
            border: 1px solid #A2A2A2;
            text-align: center;
            padding: 6px;
            width: 40px;
            height: 40px;
            position: fixed;
            bottom: 50px;
            right: 30px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <?php
    include("menu.php");
    ?>
    <div id="carouselExampleInterval" class="carousel slide mt-5" data-ride="carousel">
        <div class="carousel-inner" style="height:491px">
            <div class="carousel-item active" data-interval="2000">
                <img src="img/coches/carrusel11.png" class="d-flex w-100 " alt="...">
            </div>
            <div class="carousel-item" data-interval="2000">
                <img src="img/coches/carrusel2.png" class="d-flex w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="2000">
                <img src="img/coches/carrusel3.png" class="d-flex w-100" alt="...">
            </div>
        </div>
    </div>
    <div class="mt-5" style="background-color:#891A1A">
        <h1 class="text-center p-3" style=" font-family: 'Impact'; color : white;">

        We adapt to your needs

        </h1>
        <h3 class="text-center  p-3" style="font-family: 'Impact'; color : white;">and we look for the perfect car for you.</h3>
    </div>
    <div class="row d-flex justify-content-center mt-5">
        <div class="col-2">
            <div class="polaroid" style=" box-shadow: 10px 10px 5px #891A1A;">
                <a href="#coches"><img class="img-fluid" src="img/coches/alquilercoche1.png" alt="alquiler Coche" style="width:100%"></a>

                <div class="container">
                    <p>Car Rental</p>
                </div>

            </div>
        </div>
        <div class="col-2">
            <div class="polaroid" style=" box-shadow: 10px 10px 5px #891A1A;">
                <a href="#furgonetas"><img class="img-fluid" src="img/coches/alquilerfurgo.jpg" alt="alquiler Furgonetas" style="width:100%"></a>

                <div class="container">
                    <p>Van rental</p>
                </div>

            </div>
        </div>
    </div>


    <div class="row justify-content-center mt-5">
        <div class="col-4">
            <h2 class="text-center" style="color:#891A1A">Car rental in Marbella</h2>
        </div>
        <div class="col-4">
            <h2 class="text-center" style="color:#891A1A">Why choose us</h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-4">
            <p class="text-center"> <b>Local company dedicated to car rental without driver</b> located in Marbella. <br><br>
            Our concept is to offer the best experience to our customers with a close and friendly treatment, with the purpose of not only the commercial collaboration or the punctual rental, but a stable relationship of trust and a personalized, flexible service, without hidden costs and with full insurance without excess.</b>
            </p>
        </div>
        <div class="col-4 " style="padding-left:8%">
            <ul>
                <li style="list-style-type:disc">Personalized and close treatment</li>
                <li style="list-style-type:disc">Car rental with clear prices and no hidden costs.</li>
                <li style="list-style-type:disc">Rental vehicles with fully comprehensive insurance and no excess.</li>
                <li style="list-style-type:disc">Own fleet of vehicles for rental</li>
                <li style="list-style-type:disc">Vehicle rental without intermediaries.</li>
                <li style="list-style-type:disc">We open our rent a car offices all year round.</li>
                <li style="list-style-type:disc">Cars for rent without any kind of advertising. Drive without ads.</li>
                <li style="list-style-type:disc">Personalized service for companies</li>
            </ul>
        </div>
    </div>
    <div class="container mt-5 mb-5"> 
        <?php
        include('whatsapptrastero.html');
                                        ?>
    </div>

    <div class="mt-5" style="background-color:#891A1A">
        <h1 class="text-center p-3" style=" font-family: 'Impact'; color : white;">
        Order your car at

        </h1>
        <h3 class="text-center  p-3" style="font-family: 'Impact'; color : white;">CAR RENTAL MARBELLA GARSIA GROUP</h3>
    </div>




    <div class="container">
        <a name="coches"></a>
        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-5">
                <img src="img/coches/audia3web.jpg" alt="audiA3" class="img-fluid">
            </div>
            <div class="col-3 align-self-center">
                <h2 style="color:#ae1102">Audi A3</h2>
                <span style="font-weight: bold; font-family: 'Poiret One'; font-size:24px">Features:<br></span>
                <ul>
                    <li style="list-style-type:disc"> <b>Car body:</b> PREMIUM</li>
                    <li style="list-style-type:disc"> <b>Fuel:</b> DIESEL</li>
                    <li style="list-style-type:disc"> <b>Transmission:</b> Automático</li>
                    <li style="list-style-type:disc"> <b>Seats:</b> 5</li>
                    <li style="list-style-type:disc"> <b>Doors:</b> 5</li>
                    <li style="list-style-type:disc"> <b>Luggage capacity:</b> 3</li>
                    <li style="list-style-type:disc"> <b>Age to rent:</b>23 Years</li>

                </ul>

            </div>



        </div>
        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-3 align-self-center">
                <h2 style="color:#ae1102">Opel Meriva</h2>
                <span style="font-weight: bold; font-family: 'Poiret One'; font-size:24px">Features:<br></span>
                <ul>
                    <li style="list-style-type:disc"> <b>Car body:</b> MONOVOLUMEN</li>
                    <li style="list-style-type:disc"> <b>Fuel:</b> DIESEL</li>
                    <li style="list-style-type:disc"> <b>Transmission:</b> Automático</li>
                    <li style="list-style-type:disc"> <b>Seats:</b> 5</li>
                    <li style="list-style-type:disc"> <b>Doors:</b> 5</li>
                    <li style="list-style-type:disc"> <b>Luggage capacity:</b> 4</li>
                    <li style="list-style-type:disc"> <b>Age to rent:</b> 23 Years</li>

                </ul>

            </div>

            <div class="col-5">
                <img src="img/coches/Opel_Meriva.png" alt="audiA3" class="img-fluid">
            </div>

        </div>
        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-5">
                <img src="img/coches/mercedesClaseB1.png" alt="Mercedes clase b" class="img-fluid">
            </div>
            <div class="col-3 align-self-center">
                <h2 style="color:#ae1102">Mercedes Benz Clase B</h2>
                <span style="font-weight: bold; font-family: 'Poiret One'; font-size:24px">Features:<br></span>
                <ul>
                    <li style="list-style-type:disc"> <b>Car body:</b> PREMIUM</li>
                    <li style="list-style-type:disc"> <b>Fuel:</b> DIESEL</li>
                    <li style="list-style-type:disc"> <b>Transmission:</b> Automático</li>
                    <li style="list-style-type:disc"> <b>Seats:</b> 5</li>
                    <li style="list-style-type:disc"> <b>Doors:</b> 5</li>
                    <li style="list-style-type:disc"> <b>Luggage capacity:</b> 3</li>
                    <li style="list-style-type:disc"> <b>Age to rent:</b> 23 Years</li>

                </ul>

            </div>



        </div>
        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-3 align-self-center">
                <h2 style="color:#ae1102">Toyota Prius</h2>
                <span style="font-weight: bold; font-family: 'Poiret One'; font-size:24px">Features:<br></span>
                <ul>
                    <li style="list-style-type:disc"> <b>Car body:</b> ECONOMIC</li>
                    <li style="list-style-type:disc"> <b>Fuel:</b> HYBRID/GASOLINA</li>
                    <li style="list-style-type:disc"> <b>Transmission:</b> Automático</li>
                    <li style="list-style-type:disc"> <b>Seats:</b> 5</li>
                    <li style="list-style-type:disc"> <b>Doors:</b> 5</li>
                    <li style="list-style-type:disc"> <b>Luggage capacity:</b> 3</li>
                    <li style="list-style-type:disc"> <b>Age to rent:</b> 23 Years</li>

                </ul>

            </div>

            <div class="col-5">
                <img src="img/coches/toyotaPrius.png" alt="toyota prius" class="img-fluid">
            </div>

        </div>
        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-5">
                <img src="img/coches/priusgris.jpg" alt="toyota prius" class="img-fluid">
            </div>
            <div class="col-3 align-self-center">
                <h2 style="color:#ae1102">Toyota Prius</h2>
                <span style="font-weight: bold; font-family: 'Poiret One'; font-size:24px">Features:<br></span>
                <ul>
                    <li style="list-style-type:disc"> <b>Car body:</b> ECONOMIC</li>
                    <li style="list-style-type:disc"> <b>Fuel:</b> HYBRID/GASOLINA</li>
                    <li style="list-style-type:disc"> <b>Transmission:</b> Automático</li>
                    <li style="list-style-type:disc"> <b>Seats:</b> 5</li>
                    <li style="list-style-type:disc"> <b>Doors:</b> 5</li>
                    <li style="list-style-type:disc"> <b>Luggage capacity:</b> 3</li>
                    <li style="list-style-type:disc"> <b>Age to rent:</b> 23 Years</li>

                </ul>

            </div>



        </div>
        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-3 align-self-center">
                <h2 style="color:#ae1102">Volkswagen Polo</h2>
                <span style="font-weight: bold; font-family: 'Poiret One'; font-size:24px">Features:<br></span>
                <ul>
                    <li style="list-style-type:disc"> <b>Car body:</b> COMPACTO</li>
                    <li style="list-style-type:disc"> <b>Fuel:</b> DIESEL</li>
                    <li style="list-style-type:disc"> <b>Transmission:</b> Automático</li>
                    <li style="list-style-type:disc"> <b>Seats:</b> 5</li>
                    <li style="list-style-type:disc"> <b>Doors:</b> 5</li>
                    <li style="list-style-type:disc"> <b>Luggage capacity:</b> 3</li>
                    <li style="list-style-type:disc"> <b>Age to rent:</b> 23 Years</li>

                </ul>

            </div>

            <div class="col-5">
                <img src="img/coches/vwpolo.png" alt="Volkswagen Polo" class="img-fluid">
            </div>

        </div>
        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-5">
                <img src="img/coches/vwpolorojo.png" alt="Volkswagen Polo" class="img-fluid">
            </div>
            <div class="col-3 align-self-center">
                <h2 style="color:#ae1102">Volkswagen Polo</h2>
                <span style="font-weight: bold; font-family: 'Poiret One'; font-size:24px">Features:<br></span>
                <ul>
                    <li style="list-style-type:disc"> <b>Car body:</b> COMPACTO</li>
                    <li style="list-style-type:disc"> <b>Fuel:</b> DIESEL</li>
                    <li style="list-style-type:disc"> <b>Transmission:</b> Automático</li>
                    <li style="list-style-type:disc"> <b>Seats:</b> 5</li>
                    <li style="list-style-type:disc"> <b>Doors:</b> 5</li>
                    <li style="list-style-type:disc"> <b>Luggage capacity:</b> 3</li>
                    <li style="list-style-type:disc"> <b>Age to rent:</b> 23 Years</li>

                </ul>

            </div>



        </div>
        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-4 align-self-center">
                <h2 style="color:#ae1102">BMW 420 GRAN COUPE </h2>
                <span style="font-weight: bold; font-family: 'Poiret One'; font-size:24px">Features:<br></span>
                <ul>
                    <li style="list-style-type:disc"> <b>Car body:</b> COMPACTO</li>
                    <li style="list-style-type:disc"> <b>Fuel:</b> DIESEL</li>
                    <li style="list-style-type:disc"> <b>Transmission:</b> Automático</li>
                    <li style="list-style-type:disc"> <b>Seats:</b> 5</li>
                    <li style="list-style-type:disc"> <b>Doors:</b> 5</li>
                    <li style="list-style-type:disc"> <b>Luggage capacity:</b>Maletero Amplio</li>
                    <li style="list-style-type:disc"> <b>Color:</b> Gris oscuro</li>
                    <li style="list-style-type:disc"> <b>Age to rent:</b> 23 Years</li>

                </ul>

            </div>

            <div class="col-5">
                <img src="img/coches/bmw420.png" alt="BMW 420 GRAN COUPE " class="img-fluid">
            </div>

        </div>
        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-5">
                <img src="img/coches/vwtouran1.png" alt="Volkswagen Touran" class="img-fluid">
            </div>
            <div class="col-4 align-self-center">
                <h2 style="color:#ae1102">Volkswagen Touran</h2>
                <span style="font-weight: bold; font-family: 'Poiret One'; font-size:24px">Features:<br></span>
                <ul>
                    <li style="list-style-type:disc"> <b>Car body:</b> FAMILY</li>
                    <li style="list-style-type:disc"> <b>Fuel:</b> DIESEL</li>
                    <li style="list-style-type:disc"> <b>Transmission:</b> Automático</li>
                    <li style="list-style-type:disc"> <b>Seats:</b> 7</li>
                    <li style="list-style-type:disc"> <b>Doors:</b> 5</li>
                    <li style="list-style-type:disc"> <b>Luggage capacity:</b> 2</li>
                    <li style="list-style-type:disc"> <b>Age to rent:</b> 23 Years</li>

                </ul>

            </div>



        </div>
        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-3 align-self-center">
                <h2 style="color:#ae1102">Skoda Rapid</h2>
                <span style="font-weight: bold; font-family: 'Poiret One'; font-size:24px">Features:<br></span>
                <ul>
                    <li style="list-style-type:disc"> <b>Car body:</b> ECONOMIC</li>
                    <li style="list-style-type:disc"> <b>Fuel:</b> DIESEL</li>
                    <li style="list-style-type:disc"> <b>Transmission:</b> Automático</li>
                    <li style="list-style-type:disc"> <b>Seats:</b> 5</li>
                    <li style="list-style-type:disc"> <b>Doors:</b> 5</li>
                    <li style="list-style-type:disc"> <b>Luggage capacity:</b> 3</li>
                    <li style="list-style-type:disc"> <b>Age to rent:</b> 23 Years</li>

                </ul>

            </div>

            <div class="col-5">
                <img src="img/coches/skodarapid.png" alt="Skoda Rapid" class="img-fluid">
            </div>

        </div>
        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-5">
                <img src="img/coches/skodafabia.png" alt="Skoda Fabia" class="img-fluid">
            </div>
            <div class="col-3 align-self-center">
                <h2 style="color:#ae1102">Skoda Fabia</h2>
                <span style="font-weight: bold; font-family: 'Poiret One'; font-size:24px">Features:<br></span>
                <ul>
                    <li style="list-style-type:disc"> <b>Car body:</b> ECONOMIC</li>
                    <li style="list-style-type:disc"> <b>Fuel:</b> DIESEL</li>
                    <li style="list-style-type:disc"> <b>Transmission:</b> Automático</li>
                    <li style="list-style-type:disc"> <b>Seats:</b> 5</li>
                    <li style="list-style-type:disc"> <b>Doors:</b> 5</li>
                    <li style="list-style-type:disc"> <b>Luggage capacity:</b> 3</li>
                    <li style="list-style-type:disc"> <b>Age to rent:</b> 23 Years</li>

                </ul>

            </div>



        </div>
        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-3 align-self-center">
                <h2 style="color:#ae1102">Mazda CX5</h2>
                <span style="font-weight: bold; font-family: 'Poiret One'; font-size:24px">Features:<br></span>
                <ul>
                    <li style="list-style-type:disc"> <b>Car body:</b> PREMIUM</li>
                    <li style="list-style-type:disc"> <b>Fuel:</b> DIESEL</li>
                    <li style="list-style-type:disc"> <b>Transmission:</b> Automático</li>
                    <li style="list-style-type:disc"> <b>Seats:</b> 5</li>
                    <li style="list-style-type:disc"> <b>Doors:</b> 5</li>
                    <li style="list-style-type:disc"> <b>Luggage capacity:</b> 3</li>
                    <li style="list-style-type:disc"> <b>Age to rent:</b> 23 Years</li>

                </ul>

            </div>

            <div class="col-5">
                <img src="img/coches/mazdacx5.png" alt="Mazda CX5" class="img-fluid">
            </div>

        </div>
        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-5">
                <img src="img/coches/seatibiza1.png" alt="Seat Ibiza" class="img-fluid">
            </div>
            <div class="col-3 align-self-center">
                <h2 style="color:#ae1102">Seat Ibiza</h2>
                <span style="font-weight: bold; font-family: 'Poiret One'; font-size:24px">Features:<br></span>
                <ul>
                    <li style="list-style-type:disc"> <b>Car body:</b> ECONOMIC</li>
                    <li style="list-style-type:disc"> <b>Fuel:</b> DIESEL</li>
                    <li style="list-style-type:disc"> <b>Transmission:</b> Automático</li>
                    <li style="list-style-type:disc"> <b>Seats:</b> 5</li>
                    <li style="list-style-type:disc"> <b>Doors:</b> 5</li>
                    <li style="list-style-type:disc"> <b>Luggage capacity:</b> 2</li>
                    <li style="list-style-type:disc"> <b>Age to rent:</b> 23 Years</li>

                </ul>

            </div>



        </div>
        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-3 align-self-center">
                <h2 style="color:#ae1102">Peugeot 508</h2>
                <span style="font-weight: bold; font-family: 'Poiret One'; font-size:24px">Features:<br></span>
                <ul>
                    <li style="list-style-type:disc"> <b>Car body:</b> PREMIUM</li>
                    <li style="list-style-type:disc"> <b>Fuel:</b> DIESEL</li>
                    <li style="list-style-type:disc"> <b>Transmission:</b> Automático</li>
                    <li style="list-style-type:disc"> <b>Seats:</b> 5</li>
                    <li style="list-style-type:disc"> <b>Doors:</b> 5</li>
                    <li style="list-style-type:disc"> <b>Luggage capacity:</b> 4</li>
                    <li style="list-style-type:disc"> <b>Age to rent:</b> 23 Years</li>

                </ul>

            </div>

            <div class="col-5">
                <img src="img/coches/peugeot5081.png" alt="Peugeot 508" class="img-fluid">
            </div>

        </div>
        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-5">
                <img src="img/coches/landrover.jpg" alt="Range Rover Evoque" class="img-fluid">
            </div>
            <div class="col-4 align-self-center">
                <h2 style="color:#ae1102">Range Rover Evoque</h2>
                <span style="font-weight: bold; font-family: 'Poiret One'; font-size:24px">Features:<br></span>
                <ul>
                    <li style="list-style-type:disc"> <b>Car body:</b> PREMIUM</li>
                    <li style="list-style-type:disc"> <b>Fuel:</b> DIESEL</li>
                    <li style="list-style-type:disc"> <b>Transmission:</b> Automático</li>
                    <li style="list-style-type:disc"> <b>Seats:</b> 5</li>
                    <li style="list-style-type:disc"> <b>Doors:</b> 5</li>
                    <li style="list-style-type:disc"> <b>Luggage capacity:</b> 3</li>
                    <li style="list-style-type:disc"> <b>Age to rent:</b> 23 Years</li>

                </ul>

            </div>



        </div>
        <a name="furgonetas"></a>
        <h2 class="mt-5" style="text-align: center; color:#ae1102">VAN RENTAL</h2>

        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-3 align-self-center">
                <h2 style="color:#ae1102">Fiat Doblo</h2>
                <span style="font-weight: bold; font-family: 'Poiret One'; font-size:24px">Features:<br></span>
                <ul>
                    <li style="list-style-type:disc"> <b>Car body:</b> Van</li>
                    <li style="list-style-type:disc"> <b>Fuel:</b> DIESEL</li>
                    <li style="list-style-type:disc"> <b>Transmission:</b> MANUAL</li>
                    <li style="list-style-type:disc"> <b>Age to rent:</b> 23 Years</li>

                </ul>

            </div>

            <div class="col-5">
                <img src="img/coches/DOBLO.jpg" alt="Fiat Doblo" class="img-fluid">
            </div>

        </div>


    </div>

    <div class="mt-5" style="background-image:linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(img/coches/banner.jpg); padding-top: 10%; background-size: cover;height: 491px;">
        <h1 class="text-center" style="font-family: 'Impact'; color: white">
Do you need to rent a car in Marbella?</h1>
        <h3 class="text-center  p-3" style="font-family: 'Impact'; color : white;">
Visit us at Garsia Group car rental in Marbella, we have what you need.</h3>
    </div>
    <div class="container mt-5 mb-5"> <?php
                                        include('whatsapptrastero.html');
                                        ?>
    </div>



    <div class="footer">
        <?php
        include('footer.php');
        ?>
    </div>
    <div class="scrollup" style="display: block;"><a href="#" style="color: white !important"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a> </div>
</body>

</html>