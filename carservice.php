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
    <title>Taller Mecanico</title>
</head>

<body>
    <?php
    include("menu.php");
    ?>
    <div class="mt-5 ">
        
    <div style="background-image:linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(img/taller/banner.jpg); padding-top: 5%; padding-bottom: 5%; background-size: cover; background-position-y: center;">
            <h1 class="text-center  " style="font-family: 'Impact';color: white">Taller Garage</h1>

        </div>
        <div class="container">
            <h1 style="font-family: 'Impact';color: #891A1A " class="text-right mt-5 text-center">Taller de Reparación de Vehículos en Marbella</h1>
            <div class="d-flex flex-row mt-5">

                <img src="img/taller/reparacion.jpg" alt="reparacion" class="img-fluid " style="width:70%; height:70%;margin-top: 3%;">
                <p class=" container-fluid text-left">

                    En nuestro taller nos dedicamos al mantenimiento y la reparación mecánica general de todo tipo de vehículos. <br><br>

                    Contamos con más de 30 años de experiencia en el sector del automóvil y <b> estamos especializados en todo tipo de marcas, incluyendo grandes como Audi, Mercedes, BWM, Volkswagen, Porche, Rolls Royce y los todoterrenos.</b><br><br>

                    Trabajamos con todas las compañías aseguradoras y disponemos de varios vehículos de sustitución para ofrecer a nuestros clientes.<br><br>

                    Estamos ubicados en la prestigiosa ciudad de Marbella, y atendemos también a <b>clientes de poblaciones vecinas, como Puerto Banús y San Pedro de Alcántara, ambos en la provincia de Málaga.</b><br><br>

                </p>
            </div>
        </div>

        <div class="mt-5"style ="background-color:#891A1A">
            <h1 class="text-center p-3" style=" font-family: 'Impact'; color : white;">

                Nuestro objetivo es,

            </h1>
            <h3 class="text-center  p-3" style="font-family: 'Impact'; color : white;">satisfacer a todos nuestros clientes ofreciéndoles
                el mejor servicio y la mejor calidad</h3>
        </div>
        <div class="container">
            <h2 class="text-center mt-5" style="color:#891A1A">Nuestros servicios</h2>
            <div class="row justify-content-center">
                <div class="m-3">
                    <img src="img/taller/mecanico1.png" alt="mecanica" class="img-fluid ">
                    <h3 class="text-center font-weight-bold mt-3">Mecánica</h3>
                    <p class="text-center">Mecánica del automovil en general</p>
        
                </div>
                <div class="m-3">
                    <img src="img/taller/electricidad.png" alt="mecanica" class="img-fluid">
                    <h3 class="text-center font-weight-bold mt-3">Electricidad</h3>
                    <p class="text-center">Electricidad del automovil en general</p>
               
                </div>
                <div class="m-3">
                    <img src="img/taller/electronica.png" alt="mecanica" class="img-fluid">
                    <h3 class="text-center font-weight-bold mt-3">Electronica</h3>
                    <p class="text-center">Electrónica del automovil en general</p>

                </div>


            </div>
        </div>
        <div class="container mt-5 mb-5">     <?php 
                include('whatsapptaller.html');
                ?></div>



    </div>

    <div style="background-image:linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(img/taller/reparacion.jpg); padding-top: 5%; padding-bottom: 5%; background-size: cover; background-position-y: center;">
            <h1 class="text-center  " style="font-family: 'Impact';color: white">Taller Garage Marbella damos servicio de pre ITV</h1>

        </div>
    <div class="footer">
        <?php
        include('footer.php');
        ?>
    </div>
</body>

</html>