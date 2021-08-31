<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tiendabean
 *
 * @author leonj
 */
class Tiendabean {
    public $ID;
    public $NOMBRE;
    public $UBICACION;
    public $DESCRIPCION;
    public $ID_USUARIO;
    
    public function getID() {
        return $this->ID;
    }

    public function getNOMBRE() {
        return $this->NOMBRE;
    }

    public function getUBICACION() {
        return $this->UBICACION;
    }

    public function getDESCRIPCION() {
        return $this->DESCRIPCION;
    }

    public function getID_USUARIO() {
        return $this->ID_USUARIO;
    }

    public function setID($ID): void {
        $this->ID = $ID;
    }

    public function setNOMBRE($NOMBRE): void {
        $this->NOMBRE = $NOMBRE;
    }

    public function setUBICACION($UBICACION): void {
        $this->UBICACION = $UBICACION;
    }

    public function setDESCRIPCION($DESCRIPCION): void {
        $this->DESCRIPCION = $DESCRIPCION;
    }

    public function setID_USUARIO($ID_USUARIO): void {
        $this->ID_USUARIO = $ID_USUARIO;
    }


}

