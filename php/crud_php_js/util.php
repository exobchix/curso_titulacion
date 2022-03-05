<?php

  class Util {

    // Metodo par la limpieza de los valores de los input
    public function testInput($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      $data = strip_tags($data);

      return $data;
    }

    // Método para mostrar los mensajes de error y éxito
    public function showMessage($type, $message) {
      return '<div class="alert alert-' . $type . ' alert-dismissible fade show" role="alert">
                <strong>' . $message . '</strong>
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
              </div>';
    }
  }

?>