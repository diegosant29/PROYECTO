<?php
if(isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "diegosantana0829@gmail.com";
$email_subject = "Mensaje enviado desde Sitio Web 'Centro del Descuento' por: " .$_POST['nombre_'];


// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['nombre_']) ||
!isset($_POST['email']) ||
!isset($_POST['telefono_']) ||
!isset($_POST['comentario_'])) {

echo '<script>alert("Ocurrió un error y el formulario no ha sido enviado. 
					Por favor, vuelva atrás y verifique la información ingresada")</script> ';
echo "<script>location.href='index.php'</script>";
die();
}

$email_message = "Detalles del Contacto:\n\n";
$email_message .= "Nombre: " . $_POST['nombre_'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Teléfono: " . $_POST['telefono_'] . "\n";
$email_message .= "Comentarios: " . $_POST['comentario_'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
 $remitente = $_POST['email'];
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, "FROM: $remitente");

echo '<script>alert("El formulario se ha enviado con éxito")</script> ';
echo "<script>location.href='index.php'</script>";

}
?>