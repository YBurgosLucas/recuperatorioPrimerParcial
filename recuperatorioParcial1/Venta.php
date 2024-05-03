<?php
 class Venta{
    private $fecha;
    private $objCliente;
    private $nroFactura;
    private $tipoComprobante;
    private $colecItemsVendidos;

    public function __construct($fecha,$objCliente,$nroFactura,$tipoComprobante,$colecItemsVendidos){
        $this->fecha=$fecha;
        $this->objCliente=$objCliente;
        $this->nroFactura=$nroFactura;
        $this->tipoComprobante=$tipoComprobante;
        $this->colecItemsVendidos=$colecItemsVendidos;

    }
    public function getFecha() {
        return $this->fecha;
    }

    public function getObjCliente() {
        return $this->objCliente;
    }

    public function getNroFactura() {
        return $this->nroFactura;
    }

    public function getTipoComprobante() {
        return $this->tipoComprobante;
    }

    public function getColecItemsVendidos() {
        return $this->colecItemsVendidos;
    }  
    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function setObjCliente($objCliente) {
        $this->objCliente = $objCliente;
    }

    public function setNroFactura($nroFactura) {
        $this->nroFactura = $nroFactura;
    }

    public function setTipoComprobante($tipoComprobante) {
        $this->tipoComprobante = $tipoComprobante;
    }

    public function setColecItemsVendidos($colecItemsVendidos) {
        $this->colecItemsVendidos = $colecItemsVendidos;
    }
    public function retornarColecItem(){
        $cad="";
        foreach($this->getColecItemsVendidos() as $unItem){
            $cad.=$unItem."\n";
        }
        return $cad;
    }
    public function __toString(){
        $cadena="fecha venta:".$this->getFecha().
                "\nClientes:".$this->getObjCliente().
                "\nNro.Factura:".$this->getNroFactura().
                "\nTipo comprobante:".$this->getTipoComprobante().
                "\nColeccion ITems Vendidos:\n".$this->retornarColecItem();
            return $cadena;
    }
    public function incorporarProducto($objProducto, $cantVender){
        $item=null;
        $colVentasRealizadas=$this->getColecItemsVendidos();
        if($objProducto->getCantidadStock() >= $cantVender){
            $unItem= new Item($cantVender, $objProducto);
            $i=count($colVentasRealizadas);
            $colVentasRealizadas[$i]=$unItem;
            $cantRestante=$objProducto->getCantidadStock()-$cantVender;
            $objProducto->setCantidadStock($cantRestante);
        }
        else{
            $objProducto=null;
        }
        return $objProducto;
    }
 }