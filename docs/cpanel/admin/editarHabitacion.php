<?php session_start();
$id = $_GET['id'];
include('../class/funciones.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?php require ("inc/head.php") ?>
    <script src="https://code.jquery.com/jquery-3.2.1.js" type="text/javascript"></script>
    <script src="../js/vendor/what-input.js" type="text/javascript"></script>
    <script src="../js/vendor/foundation.min.js" type="text/javascript"></script>
    <!-- <script type="text/javascript" src="../js/app.js"></script> -->
  </head>
  <body>
    <header>
      <div class="rows">
        <div class="column medium-10 medium-offset-2 text-center">
          <h4>Editar Hotel</h4>
        </div>
      </div>
    </header>
    <main class="row expanded">
      <div class="medium-2">
        <?php include("inc/menu.php") ?>
      </div>
      <div class="column medium-10">
        <div class="">
        <form id="form" action="actualizarHabitacion.php" method="post" enctype="multipart/form-data">
            <fieldset>
              <div class="row">
                <div class="column">
                  <legend><h5>Registro de hoteles</h5></legend>
                </div>
              </div>
              <div class="row ">
                <div class="column medium-6">
                  <label for="">Nombre del hotel:</label>
                  <?php
              $boletos = new Habitacion();
              $respuesta = $boletos->getEditarHabitacion($id);
              foreach ($respuesta as $valor) {
                echo "<input type='text' name ='tipo' value='".$valor['tipo_habitacion']."' required>";
              }
              ?>                
            </div>
            <div class="column medium-6">
              <label for="">Precio Individual:</label>
              <?php
          $boletos = new Habitacion();
          $respuesta = $boletos->getEditarHabitacion($id);
          foreach ($respuesta as $valor) {
            echo "<input type='text' name ='precio_ind' value='".$valor['precio']."' required>";
          }
          ?>                 
        </div>
              </div>
              <div class="row ">
                <div class="column medium-12">
                  <label for="">Precio Doble:</label>
                  <?php
              $boletos = new Habitacion();
              $respuesta = $boletos->getEditarHabitacion($id);
              foreach ($respuesta as $valor) {
                echo "<input type='text' name ='precio_doble' value='".$valor['precio_doble']."' required>";
              }
              ?>                  
            </div>    
              </div>
          
    

              </div>
  
              <div class="row ">
              <input type="hidden" name="id" value=" <?php echo $id ?>" class="button success">
                <input type="submit" name="" value="Actualizar" class="button success">
              </div>
            </fieldset>
          </form>
                 
          </div>
          </div>

  
</body>

</html>