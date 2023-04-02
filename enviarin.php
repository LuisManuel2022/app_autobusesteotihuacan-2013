<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/plantillabase.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Enviar_Contacto</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<link href="css/estiloprincipal.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/menu.css" type="text/css" />

<?php include("includes/google.php"); ?>
</head>

<body>
<input name="Asunto:" type="text" />

<div class="container">
  <div class="header"><?php include("includes/cabecera.php"); ?>
  <?php include("includes/menuin.php"); ?>
  <!-- InstanceBeginEditable name="ParteSuperior" -->
 
  <!-- InstanceEndEditable --></div>
  <div class="sidebar1"><!-- InstanceBeginEditable name="ContenidoIzquierda" -->
      <br />
  <br />
   <br />
   <img width="239" height="350" alt="" src="IMAGENES/promoinweb.jpg" complete="complete"/>
</p>
   
    <p>&nbsp;</p>
     <p>Follow us: <a href="https://www.facebook.com/pages/Autobuses-Teotihuacan/600767753284482?fref=ts" target="_blank"><img width="30" height="30" alt="" src="IMAGENES/FACEBOOK.png" complete="complete"/></a>
  <!-- InstanceEndEditable -->
  <!-- end .sidebar1 --></div>
  <div class="content"><!-- InstanceBeginEditable name="ContenidoCentral" -->
    <h1>CONTACT</h1>
    <img width="239" height="209" alt="" src="IMAGENES/LOGOS TEOTIHUACAN.PNG" complete="complete"/><hr>
<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$mail = $_POST['mail'];
$ciudad = $_POST['ciudad'];
$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ", desde la pagina de contactos  " . $empresa . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "ASUNTO: " . $_POST['asunto'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'ramonhdz@autobusesteotihuacan.com.mx,compaluis51@hotmail.com, claugris2000@autobusesteotihuacan.com.mx, marcosoft2010@autobusesteotihuacan.com.mx';
$asunto = 'www.autobusesteotihuacan.co.mx';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'YOUR MESSAGE HAS BEEN SENT THANKS.';

?>
 
  <!-- InstanceEndEditable -->
  <!-- end .content --></div>
  <div class="sidebar2"><!-- InstanceBeginEditable name="ContenidoDerecha" -->
   
</body>

</html>

   
  
  <!-- InstanceEndEditable -->
  <!-- end .sidebar2 --></div>
  <div class="footer">
  <?php include("includes/pie.php"); ?></div>
  <!-- end .container --></div>
</body>
<!-- InstanceEnd --></html>
