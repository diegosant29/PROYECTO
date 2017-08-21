<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Centro Comercial</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
   
    <!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */
        /* Necessary for full page carousel*/

        html,
        body {
            height: 100%;
        }
        /* Navigation*/
        .price {
            position: absolute;
            left: 0;
            top: 0;
            margin-top: -2px;
        }

        .price .tag {
            margin: 0;
        }

        .navbar {
            background-color: transparent;
        }

        .top-nav-collapse {
            background-color: #304a74;
        }

        footer.page-footer {
            background-color: #304a74;
        }

        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #4285F4;
            }
        }

        .scrolling-navbar {
            -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
            -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
            transition: background .5s ease-in-out, padding .5s ease-in-out;
        }
        /* Carousel*/

        .carousel {
            height: 50%;
        }

        @media (max-width: 776px) {
            .carousel {
                height: 100%;
            }
        }

        .carousel-item,
        .active {
            height: 100%;
        }

        .carousel-inner {
            height: 100%;
        }
        /*Caption*/

        .flex-center {
            color: #fff;
        }
        .navbar .btn-group .dropdown-menu a:hover {
            color: #000 !important;
        }
        .navbar .btn-group .dropdown-menu a:active {
            color: #fff !important;
        }
    </style>

</head>

<body>


    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php"><h2>Centro Del Descuento</h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="#productos">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contactos">Comtactos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Iniciar Sesion</a>
                    </li>
                                   </ul>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </div>
    </nav>
    <!--/.Navbar-->

    <!--Carousel Wrapper-->
    <div id="carousel-example-3" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-3" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-3" data-slide-to="1"></li>
            <li data-target="#carousel-example-3" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!-- First slide -->
            <div class="carousel-item active view hm-black-light" >
            <img src="assets/img/imagen1.jpg" width="1400" height="320">
                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeIn col-md-12">
                        <li>
                            <h1 class="h1-responsive">Bienvenidos a nuestro centro comercial</h1>
                        </li>
                        <li>
                            <p>Encontraras variedades de productos al menor precio</p>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!--/.First slide-->

            <!-- Second slide -->
            <div class="carousel-item view hm-black-light" >
            <img src="assets/img/imagen2.jpg" width="1400" height="320">

                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeIn col-md-12">
                        <li>
                            <h1 class="h1-responsive">Management por categorías</h1>
                        </li>
                        <li>
                            <p>Mejores precios al por mayor</p>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!--/.Second slide -->

            <!-- Third slide -->
            <div class="carousel-item view hm-black-light" >
            <img src="assets/img/imagen3.jpg" width="1400" height="320">

                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeIn col-md-12">
                        <li>
                            <h1 class="h1-responsive">Productos de mejor calidad</h1>
                        </li>
                        <li>
                            <p>Categorias</p>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!--/.Third slide-->
        </div>
        <!--/.Slides-->
        
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-3" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-3" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->

    <br>

    <!--Content-->
    <div class="container">
        <div class="divider-new pt-5">
            <h2 class="h2-responsive wow fadeIn" data-wow-delay="0.2s">Mejores Productos</h2>
        </div>
        <div class="row my-5">
            <!--First columnn-->
            <div class="col-lg-4">
                <!--Card-->
                <div class="card wow fadeIn" data-wow-delay="0.2s">

                    <!--Card image-->
                    <img class="img-fluid" src="assets/img/arroz.jpg" alt="Card image cap">
                    <h3 class="price"><span class="badge red darken-2">$ 1.50</span></h3>

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Arroz</h4>
                        <!--Text-->
                        <p class="card-text">El arroz es el segundo cereal más producido en el mundo, tras el maíz.2 Debido a que este se produce con muchos otros propósitos aparte del consumo humano</p>
                        <a href="#" class="btn btn-info">Read more</a>
                    </div>

                </div>
                <!--/.Card-->
            </div>
            <!--First columnn-->

            <!--Second columnn-->
            <div class="col-lg-4">
                <!--Card-->
                <div class="card wow fadeIn" data-wow-delay="0.4s">

                    <!--Card image-->
                    <img class="img-fluid" src="assets/img/azucar1.jpg" alt="Card image cap">
                    <h3 class="price"><span class="badge red darken-2">$ 1.00</span></h3>

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Azucar</h4>
                        <!--Text-->
                        <p class="card-text">El azúcar es una importante fuente de calorías en la dieta alimenticia moderna, pero es frecuentemente asociada a calorías vacías, debido a la completa ausencia de vitaminas y minerales.</p>
                        <a href="#" class="btn btn-info">Read more</a>
                    </div>

                </div>
                <!--/.Card-->

            </div>
            <!--Second columnn-->

            <!--Third columnn-->
            <div class="col-lg-4 mb-4">
                <!--Card-->
                <div class="card wow fadeIn" data-wow-delay="0.6s">

                    <!--Card image-->
                    <img class="img-fluid" src="assets/img/aceite.jpg" alt="Card image cap">
                    <h3 class="price"><span class="badge red darken-2">$ 3.50</span></h3>
                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Aceite</h4>
                        <!--Text-->
                        <p class="card-text">Aceite: está diseñado para una alta resistencia durante el recalentamiento en las frituras, no contiene colesterol. </p>
                        <a href="#" class="btn btn-info">Read more</a>
                    </div>

                </div>
                <!--/.Card-->
            </div>
            <!--Third columnn-->
        </div>
        <div class="divider-new">
            <h2 id="productos" class="h2-responsive wow fadeIn">Precios de algunos Productos</h2>
        </div>
        <div class="card wow fadeIn">

                        <!--Card image-->
                        <img class="img-fluid" src="assets/img/productos.jpg" alt="Card image cap">

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title text-center">Productos</h4>
                            <hr>
                            <!--Text-->
                            <center><p class="card-text">Existen variedades de prodcutos al mejor precio y al por mayor para diferentes negocios o empresas. </p></center>
                        </div>

                    </div>
                    <!--CONTACTOS-->
        <div id = "contactos" class="divider-new">
            <h2 class="h2-responsive wow fadeIn">Contactenos</h2>
        </div>
<center>
            <div>
                <form method="post" action="validar-contacto.php">    
                        <div>
                            <span ><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input  name="nombre_" type="text" placeholder="Ingrese su nombre" class="form-control" required >
                            </div>
                        </div>

                        <div class="form-group">
                            <span ><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input  name="email" type="email" placeholder="Ingrese su Email" class="form-control" required >
                            </div>
                        </div>

                        <div class="form-group">
                             <span ><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <input  name="telefono_" type="text" placeholder="Ingrese su Telefono" class="form-control" required >
                            </div>
                        </div>

                        <div class="form-group">
                            <span ><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea  name="comentario_" placeholder="Redacte el mensaje" rows="7" required ></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-info">Enviar</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
</center>
<!--CONTACTO-->
<br>
        <div class="divider-new">
            <h2 class="h2-responsive wow fadeIn">Ubicación</h2>
        </div>

        <section id="contact pb-5">
            <div class="row">
                <!--First column-->
                <center>
                <div class="col-md-8 mb-5">
                    <div class="z-depth-1 wow fadeIn" style="height: 300px">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63827.778691379084!2d-80.74824293528216!3d-0.9787788967932489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902be4433808da59%3A0xe403693abfcb4bdc!2sTienda+Centro+Del+Descuento!5e0!3m2!1ses-419!2sec!4v1502854177353" width="730" height="300"  frameborder="0" style="border:0" allowfullscreen></iframe>

                    </div>
                </div>
                </center>
                <!--/First column-->

                <!--Second column-->
                <div class="col-md-4">
                    <ul class="text-center list-unstyled">
                        <li class="wow fadeIn" data-wow-delay="0.2s"><i class="fa fa-map-marker teal-text fa-lg"></i>
                            <p>Parroquia: Proaño</p>
                        </li>

                        <li class="wow fadeIn mt-5 pt-2" data-wow-delay="0.3s"><i class="fa fa-phone teal-text fa-lg"></i>
                            <p>+ 05- 2362251</p>
                        </li>

                        <li class="wow fadeIn mt-5 pt-2" data-wow-delay="0.4s"><i class="fa fa-envelope teal-text fa-lg"></i>
                            <p>centrodeldescuento.com</p>
                        </li>
                    </ul>
                </div>
                <!--/Second column-->
            </div>
        </section>
    </div>
    <!--/.Content-->


    <!--Footer-->
    <footer class="page-footer center-on-small-only">

        <!--Footer Links-->
        <div class="container-fluid">
            <div class="row">

                <!--First column-->
                <div class="col-lg-3 col-md-6 ml-auto">
                    <h5 class="title font-bold mt-3 mb-4">Quienes somos</h5>
                    <p>Somos estudiantes de la Universidad Laica Eloy Alfaro de Manabì, de la Facultad Ciencias Informáticas </p>

                    <p>Quinto Nivel "A"</p>
                </div>
                <!--/.First column-->

                <hr class="w-100 clearfix d-sm-none">

                <!--Second column-->
                <div class="col-lg-2 col-md-6 ml-auto">
                    <h5 class="title font-bold mt-3 mb-4">Scrum Manager</h5>
                    <p> Docente: </p>
                    <p>Ing. Jorge Moya Delgado </p>                     
                </div>
                <!--/.Second column-->

                <hr class="w-100 clearfix d-sm-none">

                <!--Third column-->
                <div class="col-lg-2 col-md-6 ml-auto">
                    <h5 class="title font-bold mt-3 mb-4">Grupo de trabajo: </h5>
                    <ul>
                        <p>* Santana Delgado Diego Alexander *</p>  
                        Correo:                   
                        <a href="#!">e1315667251@ive.uleam.edu.ec</a>
                        <br>
                        <br>
                        <p>* Calderon Zambrano Freddy Crithopher * </p> 
                        Correo:                    
                        <a href="#!">e13147445641@ive.uleam.edu.ec</a>
                    </ul>
                </div>
                <!--/.Third column-->

                <hr class="w-100 clearfix d-sm-none">

                <!--Fourth column-->
                <div class="col-lg-2 col-md-6 ml-auto">
                    <h5 class="title font-bold mt-3 mb-4">Gerente de la empresa</h5>
                    <p>* Ger. Amarilis Bravo Moreira * </p>                     
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <hr>

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
            &#169; Creado por: Calderón Freddy y Santana Diego- 5to 'A'
            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

    <!-- Bootstrap dropdown -->
    <script type="text/javascript" src="js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>



    <script>
        new WOW().init();
    </script>

</body>

</html>