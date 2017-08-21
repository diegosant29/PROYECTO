
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="css/style-re.css">
	<title>Registrarse</title>
</head>
<div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper">
        <a class="brand-logo" class="nav-wrapper container"><a href="index.php" id="logo-container" class="brand-logo">Centro Comercial</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Información</a></li>
        <li><a href="#">Contactos</a></li>
        <li><a href="login.php">Iniciar Sesion</a></li>
      </ul>
      </div>
    </nav>
  </div>
  <div >
           <center>             
            <i class="zmdi zmdi-account zmdi-hc-4x"> Registrarse</i>
           </center>
        </div>
<body class="font-cover" id="login" >
	
<div class="container-login center-align">
        
		<center>
<div class="Ingreso">

	<table border="0" align="center" valign="middle">
		<tr>
		<td rowspan=2>
	   <form method="post" action="" >
        <fieldset>
            <div class="input-field">
                <label for="UserName"><i class="zmdi zmdi-account"></i>&nbsp; Ingrese su Nombre</label>
                <input id="UserName" name="realname" type="text" class="validate" required>
            </div>
            <div class="input-field">
                <label for="UserName"><i class="zmdi zmdi-email"></i>&nbsp; Ingrese su email</label>
                <input id="UserName" name="nick" type="text" class="validate" required>
            </div>
            <div class="input-field col s12">
                <label for="Password"><i class="zmdi zmdi-lock"></i>&nbsp; Contraseña</label>
                <input id="Password" name="pass" type="password" class="validate" required>
            </div>
            <div class="input-field col s12">
                <label for="Password"><i class="zmdi zmdi-lock"></i>&nbsp;Vuelva a escribir la contraseña</label>
                <input id="Password" name="rpass" type="password" class="validate" required>
            </div>
           <div class="divider" style="margin: 10px 0;"></div>
			<center> <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/>

            </center>
		</fieldset>
        </form>
<div>
<br>
<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>
<!--Fin formulario registro -->

		</td>
		</tr>
		</table>
		</div></center></div></center>
<script src="js-login/sweetalert.min.js"></script>
    
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-2.2.0.min.js"><\/script>')</script>
    
    <!-- Materialize JS -->
    <script src="js/materialize.min.js"></script>
    
    <!-- Malihu jQuery custom content scroller JS -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <!-- MaterialDark JS -->
    <script src="js/main.js"></script>
	
</body>
<br><br><br><br><br><br><br><br><br><br><br>><br><br><br><br><br><br>
<footer id="pie"><center>
&#169; Creado por: Calderón Freddy y Santana Diego- 5to 'A'
</center></footer>
</html>