<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="category" content="Spanish, Spain">
    <meta name="description" content="empresa de alquiler y venta de coches y de materiales de construccion">
    <meta name="locality" content="Marbella, Malaga, España">
    <link rel="stylesheet"href="assets/reset.css" type="text/css" media="screen">
    <link rel="stylesheet"href="assets/style.css" type="text/css" media="screen">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon"href="img/favicon.ico" />
    <title>Taller Mecanico</title>
</head>

<body>
    <?php
    include("menu.php");
    ?>
    <div class="mt-5 ">
        
    <div style="background-image:linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(img/carrusel/8.png); padding-top: 7%; background-size: cover; background-position-y: center; height: 491px;">
    <h1 class="text-center mt-5" style="font-size: xxx-large; font-family: 'Impact';color: white">Taller Garage</h1>
    <h1 class="text-center mt-3" style="color:white">Repair workshop in Marbella</h1>

        </div>
        <div class="container">
            <h1 style="font-family: 'Impact';color: #891A1A " class="text-right mt-5 text-center">Vehicle Repair Shop in Marbella</h1>
            <div class="d-flex flex-row mt-5">

                <img src="img/taller/reparacion.jpg" alt="reparacion" class="img-fluid " style="width:70%; height:70%;">
                <p class=" container-fluid text-justify">

                In our workshop we are dedicated to the maintenance and general mechanical repair of all types of vehicles. 
                    We have more than 30 years of experience in the automobile industry and <b> we specialize in all types of brands, including major brands such as Audi, Mercedes, BWM, Volkswagen, Porsche, Rolls Royce and SUVs.</b>

                    We work with all insurance companies and we have several replacement vehicles to offer to our customers.

                    We are located in the prestigious city of Marbella, and we also attend to <b>customers from neighboring towns, such as Puerto Banús and San Pedro de Alcántara, both in the province of Málaga.</b>

                </p>
            </div>
        </div>

        <div class="mt-5"style ="background-color:#891A1A">
            <h1 class="text-center p-3" style=" font-family: 'Impact'; color : white;">

            Our objective is,
            </h1>
            <h3 class="text-center  p-3" style="font-family: 'Impact'; color : white;">satisfy all our customers by offering them the best service
                the best service and the best quality</h3>
        </div>
        <div class="container">
            <h2 class="text-center mt-5" style="color:#891A1A">Our services</h2>
            <div class="row justify-content-center">
                <div class="m-3">
                    <img src="img/taller/mecanico1.png" alt="mecanica" class="img-fluid ">
                    <h3 class="text-center font-weight-bold mt-3">Mechanics</h3>
                    <p class="text-center">Automotive mechanics in general</p>
        
                </div>
                <div class="m-3">
                    <img src="img/taller/electricidad.png" alt="mecanica" class="img-fluid">
                    <h3 class="text-center font-weight-bold mt-3">Electricity</h3>
                    <p class="text-center">Automotive Electricity in general</p>
               
                </div>
                <div class="m-3">
                    <img src="img/taller/electronica.png" alt="mecanica" class="img-fluid">
                    <h3 class="text-center font-weight-bold mt-3">Electronics</h3>
                    <p class="text-center">Automotive electronics in general</p>

                </div>


            </div>
        </div>
        <div class="container mt-5 mb-5">     <?php 
                include('whatsapptaller.html');
                ?></div>



    </div>

    <div style="background-image:linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(img/taller/reparacion.jpg); padding-top: 5%; padding-bottom: 5%; background-size: cover; background-position-y: center;">
            <h1 class="text-center  " style="font-family: 'Impact';color: white">Workshop Garage Marbella we give service of pre ITV</h1>

        </div>
    <div class="footer">
        <?php
        include('footer.php');
        ?>
    </div>
</body>

</html>