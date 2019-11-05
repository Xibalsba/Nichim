<?php

/**
 * Manejo de las rutas del sistema
 *
 * Funcionamiento de las rutas
 *
 * URL convencional: index.php?clase=usuarios&objeto=editar&parametros=121
 * URL Amigable: usuarios/editar/121
 *
 * Controlador/Clase - Objeto - Parámetros
 * => usuarios/
 * => usuarios/ver
 * => usuarios/ver/12
 * => usuarios/ver/12/admin
 *
 * Para ello el primer dato que obtiene se convertiría en el controldor y el nombre de la clase(usuarios).
 * El segundo dato se convierte en el objeto de la clase(editar)
 * El resto de datos que vayan después se convierten en los parámetros del objeto.
 */
class Router{
  /**
   * Obtener la uri consultada
   * @var string
   */
  public $uri;

  public function __construct(){
    $u = $this->uri;
    $this->getRoute($u);
  }
  /**
   * Procesa la consulta de la uri
   * @param  string $u uri obtenida de la consulta
   * @return string    uri separada
   */
  public function getRoute($u){
    $uri_e = explode("/",$u);
    return $uri_e;
  }

}

?>
