<?php
 class Tienda{
    private $nombre;
    private $direccion;
    private $telefono;
    private $colecProductos;
    private $colecVentasRealizadas;

    public function __construct($nombre,$direccion,$telefono,$colecProductos,$colecVentasRealizadas){
        $this->nombre=$nombre;
        $this->direccion=$direccion;
        $this->telefono=$telefono;
        $this->colecProductos=$colecProductos;
        $this->colecVentasRealizadas=$colecVentasRealizadas;
    }
    public function getNombre() {
        return $this->nombre;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getColecProductos() {
        return $this->colecProductos;
    }

    public function getColecVentasRealizadas() {
        return $this->colecVentasRealizadas;
    }
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function setColecProductos($colecProductos) {
        $this->colecProductos = $colecProductos;
    }

    public function setColecVentasRealizadas($colecVentasRealizadas) {
        $this->colecVentasRealizadas = $colecVentasRealizadas;
    }
    public function retornarColecProductos(){
        $cad="";
        foreach($this->getColecProductos() as $producto){
            $cad.=$producto."\n";
        }
        return $cad;
    }
    public function retornarColVentaRealizadas(){
        $cad="";
        foreach($this->getColecVentasRealizadas() as $ventaHecha){
            $cad.=$ventaHecha."\n";
        }
        return $cad;
    }
    public function __toString(){
        $cadena="nombre:".$this->getNombre().
                "\nDireccion:".$this->getDireccion().
                "\nTelefono:".$this->getTelefono().
                "\nColeccion Productos:\n".$this->retornarColecProductos().
                "\nColec. Ventas Realizadas:\n".$this->retornarColVentaRealizadas();
            return $cadena;
    }

    public function buscarProducto($codBarra){
        $encontrado=-1;
        $coleProductos=$this->getColecProductos();
        $i=0;
        while($i<count($coleProductos) && $encontrado==-1){
            $unProducto=$coleProductos[$i];
            if($unProducto->getCodigoBarra() == $codBarra){
                $encontrado=$i;
            }
            $i++;
        }
        return $encontrado;

    }

    public function realizarVenta($colInfoVenta) {
        $unaVenta = null;
        $colecProductos=$this->getColecProductos();
        $i=0;
        foreach($colInfoVenta as $unItem){
         foreach($this->getColecProductos() as $unProducto){
            if($unItem == $unProducto->buscarProducto($unItem["codigo Barra"])){
                $encontrado=$unItem;
            }
         }
        if($encontrado!=-1){
            $unObjProducto=$this->getColecProductos()[$encontrado];
            if($unObjProducto->getCantidadStock() >= $unItem["cant. a Vender"]){
                if($unaVenta==null){

                }
            }
        }

        }
        
    
       /*  foreach ($colInfoVenta as $unItem) {
            $indiceProducto = -1;
            $indice = 0;
    
            while ($indice < count($this->getColProductos()) && $indiceProducto == -1) {
                if ($this->getColProductos()[$indice]->getCodigoBarra() == $unItem->codigoBarra) {
                    $indiceProducto = $indice;
                }
                $indice++;
            }
    
            if ($indiceProducto != -1) {
                $unObjProducto = $this->getColProductos()[$indiceProducto];
    
                if ($unObjProducto->getCantStock() >= $unItem->cantidadAVender) {
                    if ($unaVenta == null) {
                        $date = new DateTime();
                        $unaVenta = new Venta($date->format('Y-m-d H:i:s'), "Consumidor Final", count($this->getColVentas()) + 1);
                    }
                    $unaVenta->incorporarProducto($unObjProducto, $unItem->cantidadAVender);
                }
            }
        }
    
        return $unaVenta;
    }*/


 }
}