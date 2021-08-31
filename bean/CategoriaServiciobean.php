<?php


class CategoriaServiciobean {
    public $ID;
    public $NOMBRE;
    
    public function getID() {
        return $this->ID;
    }

    public function getNOMBRE() {
        return $this->NOMBRE;
    }

    public function setID($ID): void {
        $this->ID = $ID;
    }

    public function setNOMBRE($NOMBRE): void {
        $this->NOMBRE = $NOMBRE;
    }


}

?>