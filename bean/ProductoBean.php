<?php


class ProductoBean {
    public $ID;
    public $NOMBRE;
    public $DESCRIPCION;
    public $FECHA;
    public $CANTIDAD;
    public $PRECIO;
    public $ID_TIENDA;
    public $ID_CATEGORIA;
    
    public function getID() {
        return $this->ID;
    }

    public function getNOMBRE() {
        return $this->NOMBRE;
    }

    public function getDESCRIPCION() {
        return $this->DESCRIPCION;
    }

    public function getFECHA() {
        return $this->FECHA;
    }

    public function getCANTIDAD() {
        return $this->CANTIDAD;
    }

    public function getPRECIO() {
        return $this->PRECIO;
    }

    public function getID_TIENDA() {
        return $this->ID_TIENDA;
    }

    public function getID_CATEGORIA() {
        return $this->ID_CATEGORIA;
    }

    public function setID($ID): void {
        $this->ID = $ID;
    }

    public function setNOMBRE($NOMBRE): void {
        $this->NOMBRE = $NOMBRE;
    }

    public function setDESCRIPCION($DESCRIPCION): void {
        $this->DESCRIPCION = $DESCRIPCION;
    }

    public function setFECHA($FECHA): void {
        $this->FECHA = $FECHA;
    }

    public function setCANTIDAD($CANTIDAD): void {
        $this->CANTIDAD = $CANTIDAD;
    }

    public function setPRECIO($PRECIO): void {
        $this->PRECIO = $PRECIO;
    }

    public function setID_TIENDA($ID_TIENDA): void {
        $this->ID_TIENDA = $ID_TIENDA;
    }

    public function setID_CATEGORIA($ID_CATEGORIA): void {
        $this->ID_CATEGORIA = $ID_CATEGORIA;
    }


}
