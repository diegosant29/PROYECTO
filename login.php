
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="css/style.css">
	<title>Login</title>
</head>
<div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper">
        <a class="brand-logo" class="nav-wrapper container"><a href="index.php" id="logo-container" class="brand-logo">Centro Comercial</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Información</a></li>
        <li><a href="#">Contactos</a></li>
      </ul>
      </div>
    </nav>
  </div>
<body class="font-cover" id="login" >
	<br><br><br><br>
<div class="container-login center-align">
        <div style="margin:15px 0;">
            <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
            <h5><p>Inicia sesión</p></h5>
        </div>
		<center>
<div class="Ingreso">

	<table border="0" align="center" valign="middle">
		<tr>
		<td rowspan=2>
	   <form action="validar.php" method="post">
            <div class="input-field">
                <label for="UserName"><i class="zmdi zmdi-email"></i>&nbsp; Correo</label>
                <input id="UserName" name="mail" type="text" class="validate"required>
            </div>
            <div class="input-field col s12">
                <label for="Password"><i class="zmdi zmdi-lock"></i>&nbsp; Contraseña</label>
                <input id="Password" name="pass" type="password" class="validate" required>
            </div>
           <div class="divider" style="margin: 20px 0;"></div>
			<center><input class="btn btn-primary" type="submit" value="Iniciar"></center>
		</form>
        <center>
	   <div class="divider" style="margin: 20px 0;"></div>
        <a href="registrar-cliente.php">Registrarse</a>
     </div></center>

<div>
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
<br><br><br><br><br><br><br><br><br><br><br>><br><br><br><br>
<footer id="pie"><center>
&#169; Creado por: Calderón Freddy y Santana Diego- 5to 'A'
</center></footer>
</html>