<?php


class Lineasolicitudbean {
    public $ID_LINEA_SOLICITUD;
    public $ID_PRODUCTO;
    public $CANTIDAD;
    public $ID_SERVICIO;
    public $ID_USUARIO;
    public $FECHA_SOLICITUD;
    public function getID_LINEA_SOLICITUD() {
        return $this->ID_LINEA_SOLICITUD;
    }

    public function getID_PRODUCTO() {
        return $this->ID_PRODUCTO;
    }

    public function getCANTIDAD() {
        return $this->CANTIDAD;
    }

    public function getID_SERVICIO() {
        return $this->ID_SERVICIO;
    }

    public function getID_USUARIO() {
        return $this->ID_USUARIO;
    }

    public function getFECHA_SOLICITUD() {
        return $this->FECHA_SOLICITUD;
    }

    public function setID_LINEA_SOLICITUD($ID_LINEA_SOLICITUD): void {
        $this->ID_LINEA_SOLICITUD = $ID_LINEA_SOLICITUD;
    }

    public function setID_PRODUCTO($ID_PRODUCTO): void {
        $this->ID_PRODUCTO = $ID_PRODUCTO;
    }

    public function setCANTIDAD($CANTIDAD): void {
        $this->CANTIDAD = $CANTIDAD;
    }

    public function setID_SERVICIO($ID_SERVICIO): void {
        $this->ID_SERVICIO = $ID_SERVICIO;
    }

    public function setID_USUARIO($ID_USUARIO): void {
        $this->ID_USUARIO = $ID_USUARIO;
    }

    public function setFECHA_SOLICITUD($FECHA_SOLICITUD): void {
        $this->FECHA_SOLICITUD = $FECHA_SOLICITUD;
    }


}
