<?php
include "Producto.php";
include "Item.php";
include "Venta.php";
include "Tienda.php";

$objProducto1=new Producto("0001","addidas","remera",2, "feif",3 );
$objProducto2=new Producto("0002","addidas","short",3, "feif",4 );
$objProducto3=new Producto("0003","nike","zapatilla",37, "feif",6 );
$objProducto4=new Producto("0004","tommy","pantalon",2, "feif",2 );

$coleccionProductos=[$objProducto1,$objProducto2, $objProducto3,$objProducto4];
$objItem=new Item(1, $objProducto1);
$colecITem=[$objItem];
$objCliente=null;
$venta=new Venta("03/05/2024", null, 1, "A" , $colecITem );


$objpro=$venta->incorporarProducto($objProducto1, 2);


$coleccionVenta=[$venta];
$objTienda=new Tienda("Indumentaria Deportiva", "santa fe", 12345, $coleccionProductos, $coleccionVenta);
echo $objTienda."\n";
$infoProducto1=["codigo Barra"=>"0001", "cant. a Vender"=>3 ];
$infoProducto2=["codigo Barra"=>"0002", "cant. a Vender"=>4];
$infoProducto3=["codigo Barra"=>"0003", "cant. a Vender"=>6 ];

echo "__________________________\n";
$obj=$tienda->buscarProducto("0003");
if($obj!=-1){
    echo ($obj+1)."\n";
}
else{
    echo "no se encontro";
}

