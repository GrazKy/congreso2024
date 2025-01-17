<?php
  require 'includes/templates/head_home.php';
?>

<style>
.Siglo-xxi{
  width: 50%;

}

  #popup {
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: 2001;
  -moz-z-index: 2001;
  -webkit-z-index: 2001; }

.content-popup {
  margin: 0px auto;
  margin-top: 150px;
  position: relative;
  padding: 5px;
  max-width: 570px;
  min-height: 250px;
  border-radius: 4px;
  background-color: #FFFFFF;
  -webkit-box-shadow: 0 0px 100px #000000;
  box-shadow: 0 0px 100px #000000; 

  @media screen and (max-width: 500px)
    {
      width: 80vw;
  }
}

.content-popup h2 {
  color: #48484B;
  border-bottom: 1px solid #48484B;
  margin-top: 0;
  padding-bottom: 4px; }

.popup-overlay {
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: 999;
  display: none;
  background-color: #777777;
  cursor: pointer;
  opacity: 0.7; }

.close #close {
  position: absolute;
  right: 15px;
  color: #DE2C74;
  z-index: 1005; }
</style>

<!--::::: contador del evento :::::-->
<div class="container-fluid contador">
  <a id="app-whatsapp" target="_blanck" href="https://api.whatsapp.com/send?phone=+529993530691&amp;text=Hola!&nbsp;me&nbsp;pueden&nbsp;apoyar?">
    <img src="build/img/whatsapp.png" alt="">
  </a>
  <div class="container">
    <div class="reloj">
      <div class="tabla_contador">
        <div class="fila ">
          <div class="col">Días</div>
          <div class="col">Horas</div>
          <div class="col">Minutos</div>
          <div class="col">Segundos</div>
        </div>
        <div class="fila" id='contador'>
        </div>
      </div>
    </div>
    <a id="app-messenger" target="_blank" href="https://m.me/CongresoParques">
      <img src="build/img/messenger.png" alt="">
    </a>
  </div>
</div>

<!--:::::: anuncios en popup

<div id="popup" >
    <div class="content-popup">
      <div class="close"><a href="#" id="close"><img src="build/img/close-button.png" width="20px"/></a></div>
        <div>
          
             <a href="https://www.ticketopolis.com/worldurbanparkscongress2022/tickets.aspx" target="_blank"> 
                <img id="img-popup" src="build/img/inscripcion4.png" alt="">
            </a>  
          <iframe width="560" height="315" src="https://www.youtube.com/embed/uqru5Tgoj_U?si=Y8jrFCNbCfAllOGA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
  </div>
  :::::: fin popup ::::::

  <div class="popup-overlay"></div> -->

  <section class="container-fluid primaryBg pt-5 pb-5">
  <img src="build/img/f1.png" alt="" class="absolute fh">
    <div class="container ">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h2 class="subtituloBMin pb-3 text-center">Arquitectura & Ciudad Saludable</h2>
          <div class="col-md-12 col-sm-10 video">
            <iframe width="100%" height="350" src="https://www.youtube.com/embed/Le980lW1rGE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-sm-12 col-md-6">
          <div class="row text-center">
            <div class="disp-none">
            <div class="col-sm-12 col-md-12" style= "display:none;">
              <img src="build/img/logos_arq.png" class="" height="450px">
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="seccionExperiencia container-fluid">
    <div class="container">
      <div class="row text-center">
        <h2 class="tituloP">VIVE LA EXPERIENCIA COMPLETA</h2>
        <h2 class="subtituloPMay">Congreso Parques 2024</h2>
      </div>
      <div class="row text-center">
        <p class="lead">El Congreso Parques es un evento especializado en parques urbanos y espacios públicos que tiene como objetivo reunir y capacitar a profesionales, funcionarios públicos, tomadores de decisiones, proveedores de la industria, estudiantes y organizaciones no gubernamentales en un mismo lugar.</p>
      </div>
    </div>
    <div class="container mt-5">
      <div class="row">
        <div class="col-sm-12 col-md-3 text-center">
          <img src="./build/img/magistrales.png" alt="" class="figure-img img-fluid rounded">
          <h5 class="subtituloPMin mt-3">Conferencias</h5>
          <p>Expertos en parques urbanos y espacios públicos; Hablarán de sus experiencias profesionales en temas de interés común para nuestras ciudades.
          </p>
        </div>
        <div class="col-sm-12 col-md-3 text-center">
          <img src="./build/img/expo.png" alt="" class="figure-img img-fluid rounded">
          <h5 class="subtituloPMin mt-3">Expo Parques</h5>
          <p>Es el foro de negocios que reúne a empresas líderes del mercado en México y latinoamérica, presentando los mejores productos y servicios para el diseño, construcción y equipamiento
            del espacio público.</p>
        </div>
        <div class="col-sm-12 col-md-3 text-center">
          <img src="./build/img/vivenciales.png" alt="" class="figure-img img-fluid rounded">
          <h5 class="subtituloPMin mt-3">Talleres</h5>
          <p>¡Disfruta la ciudad y aprende al mismo tiempo! En los talleres podrás conocer atractivos turísticos y proyectos ciudadanos relacionados con el espacio público de la mano de un especialista.</p>
        </div>
        <div class="col-sm-12 col-md-3 text-center">
          <img src="./build/img/eventos.png" alt="" class="figure-img img-fluid rounded">
          <h5 class="subtituloPMin mt-3">Eventos Sociales</h5>
          <p >Amplía tu red profesional y disfruta de los eventos realizados especialmente para ti. Reúnase en un ambiente relajado, diviértase y haga networking.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="seccion_conferencista primaryBg container-fluid">
  
    <div class="container">
      <div class="row text-center mb-4">
       <!-- <h1>Conferencistas Magistrales</h1> -->
        <h2>convocatoria abierta</h2> 
         <h3>¡Forma parte del Congreso Parques 2024!</h3> 
      </div>
    </div>
    <div class="container">
      <div class="row slider_conferencistas justify-content-center">
        <div class="col-md-2 text-center conferencista">
          <img src="./build/img/perfil_hombre.png" alt="" class="img_200">
          <h5>NOMBRE APELLIDO</h5>
          <h6>EMPRESA</h6>
          <h6 class="conferencista__cargo">CIUDAD, PAIS</h6>
        </div>
        <div class="col-md-2 text-center conferencista">
          <img src="./build/img/perfil_mujer.png" alt="" class="img_200">
          <h5>NOMBRE APELLIDO</h5>
          <h6>EMPRESA</h6>
          <h6 class="conferencista__cargo">CIUDAD, PAIS</h6>
        </div>
        <div class="col-md-2 text-center conferencista">
          <img src="./build/img/perfil_hombre.png" alt="" class="img_200">
          <h5>NOMBRE APELLIDO</h5>
          <h6>EMPRESA</h6>
          <h6 class="conferencista__cargo">CIUDAD, PAIS</h6>
        </div>
        <div class="col-md-2 text-center conferencista">
          <img src="./build/img/perfil_mujer.png" alt="" class="img_200">
          <h5>NOMBRE APELLIDO</h5>
          <h6>EMPRESA</h6>
          <h6 class="conferencista__cargo">CIUDAD, PAIS</h6>
        </div>
        </div>
    </div>
    <div class="row text-center mt-5">
      <div class="cta">
        <a href="./sesiones.php" class="btn btn__primary">Consulta las bases</a>
      </div>
    </div> 
  </section>
  <section class="seccionOrganizado pt-5 pb-5 container-fluid
  ">
    <div class="container">
      <div class="row text-center">
        <h2 class="tituloP mb-5">Organizado por:</h2>
      </div>
      <div class="flex-sm-column justify-content-sm-around d-md-flex flex-md-row justify-content-md-evenly text-center">
          <div class="col">
            <img src="./build/img/anpr_logo.png" alt="">
          </div>
          <!--
          <div class="col">
            <img src="./build/img/ocv_leon.png" alt="">
          </div>
          <div class="col">
            <img src="./build/img/viva_leon.png" alt="">
          </div>
          <div class="col">
            <img src="./build/img/leon_ayuntamiento.png" alt="">
          </div>
      </div>
            -->
    <!-- </div>

    <div class="container mt-5">
      <div class="row text-center">
        <h2 class="tituloP mb-5">Patrocinadores:</h2>
      </div>
     
      <div class="flex-sm-column justify-content-sm-around d-md-flex flex-md-row justify-content-md-evenly text-center">
          <div class="col">
            <img src="./build/img/patrocinador-1.png" alt="" class="" style="width: 18rem;">
          </div>
          <div class="col">
            <img src="./build/img/patrocinador-2.png" alt="" class="" style="width: 18rem;">
          </div>
          
      </div>
            -->
      <hr>
    </div>
  </section>

  <?php include 'includes/templates/boletos.php'; ?>

  <section class="seccionLegado pt-5 pb-5">
    <div class="container">
      <div class="row text-center ">
        <h2 class="tituloP mb-5">Nuestro Legado</h2>
      </div>
      <div class="flex-sm-column d-md-flex flex-md-row justify-content-md-evenly">
          <div class="text-center m-5 m-md-0">
            <img src="./build/img/i_asistentes.png" alt="">
            <h3 class="subtituloPMay">+5582</h3>
            <h6 class="subtituloPMay">Asistentes</h6>
          </div>
          <div class="text-center m-5 m-md-0">
            <img src="./build/img/i_ciudades.png" alt="">
            <h3 class="subtituloPMay">+37</h3>
            <h6 class="subtituloPMay">Países</h6>
          </div>
          <div class="text-center m-5 m-md-0">
            <img src="./build/img/i_conferencistas.png" alt="">
            <h3 class="subtituloPMay">+490</h3>
            <h6 class="subtituloPMay">Conferencistas</h6>
          </div>
          <div class="text-center m-5 m-md-0">
            <img src="./build/img/i_conferencias.png" alt="">
            <h3 class="subtituloPMay">+246</h3>
            <h6 class="subtituloPMay">Conferencias</h6>
          </div>
          <div class="text-center m-5 m-md-0">
            <img src="./build/img/i_talleres.png" alt="">
            <h3 class="subtituloPMay">+67</h3>
            <h6 class="subtituloPMay">Talleres</h6>
          </div>
          <div class="text-center m-5 m-md-0">
            <img src="./build/img/i_expositores.png" alt="">
            <h3 class="subtituloPMay">+154</h3>
            <h6 class="subtituloPMay">Expositores</h6>
          </div>
      </div>
    </div>
  </section>
  <section class="primaryBg  container-fluid">
    <div class="row align-items-center">
      <div class="col-sm-12 col-md-4 text-center py-5 ">
        <h2 class="tituloB mb-3">Lugar :</h2>
        <!-- <p>Poliforum León<br> -->
        <img src="build/img/Siglo-XXI.png" alt="" class="Siglo-xxi">
        <p><strong>Mérida, Yucatán.</strong><br>
        SIGLO XXI<br>
        Calle 60 Nte 299, Zona <br>Industrial, Revolucion, <br>97118 Mérida, Yuc.
        </p>
      </div>
      <div class="col-md-8">
      <!-- <iframe src="https://maps.app.goo.gl/1rKC8gBeqNqSpPhw5" width="100%" height="500px"></iframe>  -->
        <iframe src="https://www.google.com/maps/d/embed?mid=1cSofAbLQeJ2kSK3oeTNSC0M9DyO_aSE&ehbc=2E312F" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>

<body>
  
<footer class="container-fluid">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <h6>Organizado por</h6>
        <img src="./build/img/anpr_blanco.png" alt="" class="logoFooter">
      </div>
      <div class="col">
        <h4 class="subtitulo">¡Mantente informado!</h4>
      </div>
      <div class="col">
        <h6 class="pb-3">Contacto</h6>
        <a href="https://www.facebook.com/CongresoParques/">
          <img src="./build/img/icon_facebook.png" alt="" class="iRedes">
        </a>
        <a href="https://www.instagram.com/congreso_parques/">
          <img src="./build/img/icon_instagram.png" alt="" class="iRedes">
        </a>
        <a href="https://www.youtube.com/channel/UC_ExzrmxP5er7qZHeVpWidQ">
          <img src="./build/img/icon_youtube.png" alt="" class="iRedes">
        </a>
        <a href="https://twitter.com/congreso_parque">
          <img src="./build/img/icon_twitter.png" alt="" class="iRedes">
        </a>
        <div>
          <span>WhatsApp +52 999 353 0691</span><br>
          <span>info@congresoparques.com</span>
        </div>
      </div>
    </div>
  </div>
</footer>
  <?php 
$imagesDir = './build/img/headers/';

$images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

$randomImage = $images[array_rand($images)];

?>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script type="text/javascript">
    let contenedorFondo = document.querySelector('.header');

if(contenedorFondo){
  // background-image: radial-gradient( circle farthest-corner at 0.1% 44.3%,  rgba(29,12,101,1) 0%, rgba(187,187,187,0) 67.4% );
  contenedorFondo.style.backgroundImage= "linear-gradient(90deg, rgba(29,12,101,1) 25%, rgba(255,255,255,0) 100%), url('<?php echo$randomImage ?>')";

}
  </script>
  <script src="build/js/contador.js"></script>


  <script src="https://code.jquery.com/jquery-3.2.1.js" type="text/javascript"></script>
  <script type="text/javascript">
  //::::::: Pop Up :::::::
  $(document).ready(function(){
    // $('#open').click(function(){
      $('#popup').fadeIn('slow');
      $('.popup-overlay').fadeIn('slow');
      $('.popup-overlay').height($(window).height());
      return false;
  });

  $(document).ready(function(){
      $('#close').click(function(){
      $('#popup').fadeOut('slow');
      $('.popup-overlay').fadeOut('slow');
      return false;
    });
  });
  </script>
 