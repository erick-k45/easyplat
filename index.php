
<html>
<!-- cabecera --> 
<?php include("head.html"); ?>
<!-- Fuente -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">  
<body>
<!-- Menu -->
<?php include("menu/menu.html"); ?>
<!--Imagen presentación empresa-->
<div width="100%">
  <div class="imagen_larga"><img src="img/slide_easyplat.jpg" width="100%" ></div>
<div align="justify" class="row_central">
  <p >Somos una empresa especializada en soluciones integrales en seguridad, para los 
  diferentes sectores públicos y privados del país, buscamos un compromomiso
  permanente, estar siempre a la vanguardia tecnologica, estratégica y operativa.
  </p>
  <p>
   Es por ello que nuestro enfoque es tener un gran alcance de seguridad integrada, con un
   equipo humano de especialistas de alto reconocimiento nacional e internacional en 
materia de seguridad publica y privada.</p>
</div>


<!-- Slider -->

<link rel='stylesheet' id='js_composer_front-css'  href="css/js_composer.css" type='text/css' media='all' />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<center>
<section class="slider">
        <div class="flexslider">
          <ul class="slides">
            <li>
              <img src="img/slide_1.jpg"/>
            </li>
            <li>
              <img src="img/slide_1.jpg"/>
            </li>
          </ul>
        </div>
      </section>
      <br><br><br><br>
</center>

</div>

<?php include('pie.html'); ?>
</body>





<!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

  <!-- FlexSlider -->
  <script src="js/jquery.flexslider.js"></script>

  <script type="text/javascript">

    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>

</html>