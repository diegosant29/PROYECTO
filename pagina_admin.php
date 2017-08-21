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
        <h4><strong>Tabla de Usuarios</strong></h4>
        <div class="row-fluid">
    
            <?php

                require("connect_db.php");
                $sql=("SELECT * FROM login");
    
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
                $query=mysqli_query($mysqli,$sql);

                echo "<table border='1'; class='table table-hover';>";
                    echo "<tr class='warning'>";
                        echo "<td><strong>Id</strong></td>";
                        echo "<td><strong>Usaurio</strong></td>";
                        echo "<td><strong>Password</strong></td>";
                        echo "<td><strong>Correo</strong></td>";
                        echo "<td><strong>Password del administrador</strong></td>";
                        echo "<td><strong>Editar</strong></td>";
                        echo "<td><strong>Borrar</strong></td>";
                    echo "</tr>";

                
            ?>
              
            <?php 
                 while($arreglo=mysqli_fetch_array($query)){
                    echo "<tr class='success'>";
                        echo "<td>$arreglo[0]</td>";
                        echo "<td>$arreglo[1]</td>";
                        echo "<td>$arreglo[2]</td>";
                        echo "<td>$arreglo[3]</td>";
                        echo "<td>$arreglo[4]</td>";

                        echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='images/actualizar.gif' class='img-rounded'></td>";
                        echo "<td><a href='pagina_admin.php?id=$arreglo[0]&idborrar=2'><img src='images/eliminar.png' class='img-rounded'/></a></td>";
                        

                        
                    echo "</tr>";
                }

                echo "</table>";

                    extract($_GET);
                    if(@$idborrar==2){
        
                        $sqlborrar="DELETE FROM login WHERE id=$id";
                        $resborrar=mysqli_query($mysqli,$sqlborrar);
                        echo '<script>alert("REGISTRO ELIMINADO")</script> ';
                        //header('Location: proyectos.php');
                        echo "<script>location.href='pagina_admin.php'</script>";
                    }

            ?>        
        <div class="span8">
        
        </div>  
        </div>  
        <br/>
        </div>
<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
        <div id = "contactos" class="divider-new">
            <h2 class="h2-responsive wow fadeIn">Productos en Ventas</h2>
        </div>
    <!--PRODUCTOS-->

        </div>
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