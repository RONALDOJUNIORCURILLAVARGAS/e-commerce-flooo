<?php


class calificacionbean {
  public $ID_CALIFICACION;
  public $ID_TIENDA;
  public $ID_USUARIO;
  public $CALIFICACION;
  public function getID_CALIFICACION() {
      return $this->ID_CALIFICACION;
  }

  public function getID_TIENDA() {
      return $this->ID_TIENDA;
  }

  public function getID_USUARIO() {
      return $this->ID_USUARIO;
  }

  public function getCALIFICACION() {
      return $this->CALIFICACION;
  }

  public function setID_CALIFICACION($ID_CALIFICACION): void {
      $this->ID_CALIFICACION = $ID_CALIFICACION;
  }

  public function setID_TIENDA($ID_TIENDA): void {
      $this->ID_TIENDA = $ID_TIENDA;
  }

  public function setID_USUARIO($ID_USUARIO): void {
      $this->ID_USUARIO = $ID_USUARIO;
  }

  public function setCALIFICACION($CALIFICACION): void {
      $this->CALIFICACION = $CALIFICACION;
  }


}
