<?php
class Producto{
    private $codigoBarra;
    private $marca;
    private $color;
    private $talle;
    private $descripcion;
    private $cantidadStock;
public function __construct($codigoBarra,$marca,$color,$talle,$descripcion,$cantidadStock){
    $this->codigoBarra=$codigoBarra;
    $this->marca=$marca;
    $this->color=$color;
    $this->talle=$talle;
    $this->descripcion=$descripcion;
    $this->cantidadStock=$cantidadStock;
}

public function getCodigoBarra() {
    return $this->codigoBarra;
}

public function getMarca() {
    return $this->marca;
}

public function getColor() {
    return $this->color;
}

public function getTalle() {
    return $this->talle;
}

public function getDescripcion() {
    return $this->descripcion;
}

public function getCantidadStock() {
    return $this->cantidadStock;
}
public function setCodigoBarra($codigoBarra) {
    $this->codigoBarra = $codigoBarra;
}

public function setMarca($marca) {
    $this->marca = $marca;
}

public function setColor($color) {
    $this->color = $color;
}

public function setTalle($talle) {
    $this->talle = $talle;
}

public function setDescripcion($descripcion) {
    $this->descripcion = $descripcion;
}

public function setCantidadStock($cantidadStock) {
    $this->cantidadStock = $cantidadStock;
}
public function __toString(){
    $cad="Codigo de Barra:".$this->getCodigoBarra().
        "\nMarca:".$this->getMarca().
        "\nColor:".$this->getColor().
        "\nTalle:".$this->getTalle().
        "\nDescripcion:".$this->getDescripcion().
        "\nCant. en stock:".$this->getCantidadStock();
        return $cad;
}
public function actualizarStock($cantStock){
    if($cantStock >0){
        $cantStock=$this->getCantidadStock()+$cantStock;
    }
    else{
        $cantStock=$this->getCantidadStock()-$cantStock;
    }
    $this->setCantidadStock($cantStock);
}
}