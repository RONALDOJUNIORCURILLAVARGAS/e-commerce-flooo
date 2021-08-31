<?php

class Personabean {
   public $ID;
   public $NOMBRE;
   public $APELLIDO;
   public $USUARIO;
   public $PASS;
   public $DNI;
   public $DIRECCION;
   public $CELULAR;
  
   public function getID() {
       return $this->ID;
   }

   public function setID($ID): void {
       $this->ID = $ID;
   }

      public function getNOMBRE() {
       return $this->NOMBRE;
   }

   public function getAPELLIDO() {
       return $this->APELLIDO;
   }

   public function getUSUARIO() {
       return $this->USUARIO;
   }

   public function getPASS() {
       return $this->PASS;
   }

   public function getDNI() {
       return $this->DNI;
   }

   public function getDIRECCION() {
       return $this->DIRECCION;
   }

   public function getCELULAR() {
       return $this->CELULAR;
   }

   public function setNOMBRE($NOMBRE): void {
       $this->NOMBRE = $NOMBRE;
   }

   public function setAPELLIDO($APELLIDO): void {
       $this->APELLIDO = $APELLIDO;
   }

   public function setUSUARIO($USUARIO): void {
       $this->USUARIO = $USUARIO;
   }

   public function setPASS($PASS): void {
       $this->PASS = $PASS;
   }

   public function setDNI($DNI): void {
       $this->DNI = $DNI;
   }

   public function setDIRECCION($DIRECCION): void {
       $this->DIRECCION = $DIRECCION;
   }

   public function setCELULAR($CELULAR): void {
       $this->CELULAR = $CELULAR;
   }



}
?>
