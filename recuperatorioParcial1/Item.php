<?php
class Item{
    private $cantVendida;
    private $objProducto;

    public function __construct($cantVendida,$objProducto){
        $this->cantVendida=$cantVendida;
        $this->objProducto=$objProducto;
    }
    public function getCantVendida() {
        return $this->cantVendida;
    }

    public function getObjProducto() {
        return $this->objProducto;
    }
    public function setCantVendida($cantVendida) {
        $this->cantVendida = $cantVendida;
    }

    public function setObjProducto($objProducto) {
        $this->objProducto = $objProducto;
    }
    public function __toString(){
        $cad="cantida vendida:".$this->getCantVendida().
            "\nProducto:\n".$this->getObjProducto();
            return $cad;
    }
}