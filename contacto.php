
<html>
<!-- cabecera --> 
<?php include("head.html"); ?>
<!-- Fuente -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<!-- Menu -->
<?php include("menu/menu_contacto.html"); ?>  
<body>

<!--Imagen presentación empresa-->
<div style="background-image:url(img/01.png);height:100%;background-attachment: fixed; background-repeat: no-repeat;
    background-size: cover;">
<br><br>
<div width="100%" style="background:linear-gradient(to bottom, #2e2e2e 90%, #434343 100%);color:white;margin-left:20%;margin-right:20%;margin-top:20px;opacity:0.95;">
  <form action="query/enviar_correo.php">
    <br>
  	<table class="contacto">
      <tr><td colspan="2" align="center"><h1>Contacto EasyPlat</h1></td></tr>
  		<tr><td><p>Nombre</p><input type="text" id="nombre" name="nombre"></td>
  			<td><p>Correo</p><input type="text" id="correo" name="correo"></td></tr>
  		<tr><td><p>Telefono</p><input type="text" id="telefono" name="telefono"></td></tr>
  		<tr><td colspan="2"><p>Mensaje</p><textarea id="mensaje" name="mensaje" rows="12%" cols="92%"></textarea></td></tr>
  			<tr><td></td><td align="right"><input type="submit" value="Enviar" class="boton"></td></tr>
  	</table>
</form>
</div>

</div>




<?php include('pie.html'); ?>

</body>



</html>