<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
    header("Location:login.php");
}elseif ($_SESSION['rol']==2) {
    header("Location:pagina_user.php");
}
?>
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
            background-color: #304a74;
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
            <a class="navbar-brand" href="pagina_admin.php"><h3>Centro del Descuento</h3></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <h4><a class="nav-link" href="#"> Bienvenido: <strong><?php echo $_SESSION['user'];?></strong></a></h4>
                    </li>
                    
                    <li class="nav-item">
                        <h4><a class="nav-link" href="desconectar.php">- Cerrar Sesion</a></h4>
                    </li>
                </ul>

                
            </div>
        </div>
    </nav>
    <!--/.Navbar-->
    <br>

    <!--Content-->
    <div class="container">
        <div class="divider-new pt-5">
            <h2 class="h2-responsive wow fadeIn" data-wow-delay="0.2s">Administración de usuarios registrados</h2>
        </div>
        <div class="well well-small">
        <hr class="soft"/>
        <h4>Edición de usuarios</h4>
        <div class="row-fluid">
        
        <?php
        extract($_GET);
        require("connect_db.php");

        $sql="SELECT * FROM login WHERE id=$id";
    //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
        $ressql=mysqli_query($mysqli,$sql);
        while ($row=mysqli_fetch_row ($ressql)){
                $id=$row[0];
                $user=$row[1];
                $pass=$row[2];
                $email=$row[3];
                $pasadmin=$row[4];
            }
        ?>
        
        <form action="ejecutaactualizar.php" method="post">
            <center>
            <div class="col-md-4">
                Id<br><input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly"><br>
                Usuario<br> <input type="text" name="user" value="<?php echo $user?>"><br>
                 Password usuario<br> <input type="text" name="pass" value="<?php echo $pass?>"><br>
                Correo usuario<br> <input type="text" name="email" value="<?php echo $email?>"><br>
                Pssword administrador<br> <input type="text" name="pasadmin" value="<?php echo $pasadmin?>"><br>
            </div>
            </center>
                <br>
            <div class="form-group">
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-info">Actualizar</button>                        </div>
                 </div>  
            </div>          
        </form>
            
        <br>

        <div class="span8">
        
        </div>  
        </div>  
        <br/>
        </div>
    </div>
<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
      
<br>
    <!--/.Content-->

    <!--Footer-->
    <footer class="page-footer center-on-small-only">

        <!--Copyright-->
        <center>
            <div class="container-fluid">
            &#169; Creado por: Calderón Freddy y Santana Diego- 5to 'A'
            </div>
        </center>
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


</body>

</html>