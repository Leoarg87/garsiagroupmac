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
    <title>Global Construccion</title>
    <style>
        .fotos:hover{
            transform: scale(0.9);
        }
        .hover{
            color:black;
        }
        .hover:hover {
            background-color: lightgrey;
        }
    </style>
</head>

<body>
    <?php
    include("menu.php");
    ?>
    <div class="container">
        <h1 style="font-family: 'Impact';color: #343a40" class="text-right mt-5 mb-5 text-center">Garsia Global Construcción</h1>
        <div class="d-flex flex-row justify-content-center">

            <img src="img/global/banner.png" alt="herramientas construccion" class="img-fluid" style="width:50%; height:85%;margin-top:8%;">
            <p class=" container-fluid text-left font-family: 'Impact'; ">

                <b>Garsia Global Construcción</b> , somos una empresa dedicada al alquiler de herramientas y maquinarias. <br><br>

                Nuestros servicios de alquiler de maquinaria abarcan los sectores de la construcción,<b> fontanería, jardinería, limpieza, electricidad, pintura, elevación, carga </b> todas aquellas actividades profesionales que requieran el uso de maquinaria o herramientas especializadas.<br><br>

                Contamos con un amplio catálogo de maquinaria y herramientas ya que, trabajamos con diversas marcas.<br><br>

                Tenemos una gran experiencia en el sector y ponemos a su disposición<b> nuestro servicio de asesoramiento personalizado </b>, adaptándolos a sus necesidades y ofreciendo precios competitivos.<br><br>

                <b>Si estas buscando herramientas y maquinarias</b>, no lo dudes, este es tu sitio de confianza!<br><br>
            </p>
        </div>
    </div>
    <div class="bg-dark mt-5">
        <h1 class="text-center p-3" style=" font-family: 'Impact';; color : white;">

            Nuestro objetivo es,

        </h1>
        <h3 class="text-center  p-3" style="font-family: 'Impact';; color : white;">satisfacer a todos nuestros clientes ofreciéndoles
            el mejor servicio y la mejor calidad</h3>
    </div>
    <!--Categorias -->
    <div class="row d-flex justify-content-center mt-5">
        <div class="col-2">
            <div class="hover polaroid" style=" box-shadow: 10px 10px 10px 5px #343a40 ;">
                <a href="herramientas.php#bombas"><img class="fotos img-fluid" src="img/global/bomba.png" alt="bomba de agua" style="width:100%"></a>

                <div class="container">
                    <h5 class="hover text-center font-weight-bold">BOMBAS DE AGUA</h5>
                </div>

            </div>
        </div>
        
        <div class="col-2">
            <div class=" hover polaroid" style=" box-shadow: 10px 10px 10px 5px #343a40;">
                <a href="herramientas.php#taladros"><img class="fotos img-fluid" src="img/global/taladro.png" alt="taladro" style="width:100%"></a>

                <div class="container">
                    <a href="herramientas.php#taladros"><h5 class=" hover text-center font-weight-bold">TALADROS Y MARTILLOS</h5></a>
                </div>

            </div>
        </div>
        <div class="col-2">
            <div class=" hover polaroid" style=" box-shadow: 10px 10px 10px 5px #343a40;">
                <a href="herramientas.php#amoladoras"><img class="fotos img-fluid" src="img/global/radial.png" alt="amoladoras" style="width:100%"></a>

                <div class="container">
                    <a href="herramientas.php#amoladoras"><h5 class=" hover text-center font-weight-bold">AMOLADORAS</h5></a>
                </div>

            </div>
        </div>
      
    </div>
    <div class="row d-flex justify-content-center mt-5">
        
        <div class="col-2">
            <div class=" hover polaroid" style=" box-shadow: 10px 10px 10px 5px #343a40;">
                <a href="herramientas.php#hormigoneras"><img class="fotos img-fluid" src="img/global/cementera.png" alt="Hormigonera" style="width:100%"></a>

                <div class="container">
                    <a href="herramientas.php#hormigoneras"><h5 class=" hover text-center font-weight-bold">HORMIGONERAS</h5></a>
                </div>

            </div>
        </div>
        <div class="col-2">
            <div class=" hover polaroid" style=" box-shadow: 10px 10px 10px 5px #343a40;">
                <a href="herramientas.php#soldadorass"><img class="fotos img-fluid" src="img/global/soldador.png" alt="soldadora" style="width:100%"></a>

                <div class="container">
                    <a href="herramientas.php#soldadoras"><h5 class=" hover text-center font-weight-bold">SOLDADORAS</h5></a>
                </div>

            </div>
        </div>  
        <div class="col-2">
            <div class=" hover polaroid" style=" box-shadow: 10px 10px 10px 5px #343a40;">
                <a href="herramientas.php#generadores"><img class="fotos img-fluid" src="img/global/.png" alt="generadores" style="width:100%"></a>

                <div class="container">
                    <a href="herramientas.php#generadores"><h5 class=" hover text-center font-weight-bold">GENERADORES</h5></a>
                </div>

            </div>
        </div>  
        </div>
        <div class="row d-flex justify-content-center mt-5">
        
        <div class="col-2">
            <div class=" hover polaroid" style=" box-shadow: 10px 10px 10px 5px #343a40;">
                <a href="herramientas.php#vibracion"><img class="fotos img-fluid" src="img/global/motor.png" alt="vibracion" style="width:100%"></a>

                <div class="container">
                    <a href="herramientas.php#vibracion"><h5 class=" hover text-center font-weight-bold">VIBRACION</h5></a>
                </div>

            </div>
        </div>
        <div class="col-2">
            <div class=" hover polaroid" style=" box-shadow: 10px 10px 10px 5px #343a40;">
                <a href="herramientas.php#señalizacion"><img class="fotos img-fluid" src="img/global/señalizacion.png" alt="señalizacion" style="width:100%"></a>

                <div class="container">
                    <a href="herramientas.php#señalizacion"><h5 class=" hover text-center font-weight-bold">SEÑALIZACION</h5></a>
                </div>

            </div>
        </div>  
        <div class="col-2">
            <div class=" hover polaroid" style=" box-shadow: 10px 10px 10px 5px #343a40;">
                <a href="herramientas.php#otros"><img class="fotos img-fluid" src="img/global/otros.png" alt="otros" style="width:100%"></a>

                <div class="container">
                    <a href="herramientas.php#otros"><h5 class=" hover text-center font-weight-bold">OTROS</h5></a>
                </div>

            </div>
        </div>  
        </div>
    <!--Categorias -->

    <div class="footer">
        <?php
        include('footer.php');
        ?>
    </div>
</body>

</html>