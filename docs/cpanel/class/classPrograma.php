<?php
class Programa extends Conexion{

  public function __construct()
  {
    parent::__construct();
  }

  public function programa($congreso)
  {
    $sql = "SELECT * FROM programa WHERE id_congreso = '$congreso' ORDER BY fecha";

    $resultado = $this->conexion_db->query($sql);

    $programa = $resultado->fetch_all(MYSQLI_ASSOC);

    return json_encode($programa);
  }

  public function bloque($tipo, $fecha, $inicio, $fin, $congreso)
  {

    if($tipo === 'Conferencias')
    {
      $sql = "SELECT * FROM ponencias where fecha = '$fecha' AND hora_inicio BETWEEN '$inicio' AND '$fin' ORDER BY hora_inicio";

      $resultado =  $this->conexion_db->query($sql);

      $data = $resultado->fetch_all(MYSQLI_ASSOC);

      $contenido = "";
      
      foreach($data as $item){
        $contenido .= "<li><span>".$item["titulo"]."</span></li>";
      }

      return $contenido;

    }
    elseif($tipo === 'Talleres')
    {
      $sql = "SELECT * FROM talleres where fecha = '$fecha' AND inicio BETWEEN '$inicio' AND '$fin'  ORDER BY inicio";
      $resultado =  $this->conexion_db->query($sql);

    $data = $resultado->fetch_all(MYSQLI_ASSOC);
    $contenido = "";

     foreach($data as $item){
        $contenido .= "<li><span>".$item["taller_ing"]."</span></li>";
      }

    return $contenido;
    }

    

  }

  public function guardarBloque($data)
  {
    $data = json_decode($data);

    $sql = "INSERT INTO programa VALUES (
      null,
      '$data->fecha',
      '$data->inicio',
      '$data->fin',
      '$data->bloque_ing', 
      '$data->tipo', 
      '$data->congreso'
      )"; 

    $resultado = $this->conexion_db->query($sql);

    return $resultado;
  }

  public function eliminar($id)
  {
    $sql = $this->conexion_db->query("DELETE FROM eventos_sociales WHERE id_evento = '$id' ");

    return $sql;
  }



  }

 ?>
