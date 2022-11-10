<?php
    require_once("vendor/autoload.php");
    $cadena = "mongodb+srv://usuarioluis:d1234567@basedatosluis.0p4mxzc.mongodb.net/?retryWrites=true&w=majority";
    $cliente = new MongoDB\Client($cadena);
    $conexion = $cliente->selectDataBase("basedatos");
    
    $tablaColeccion = $conexion->comentario;

    $resultado = $tablaColeccion->insertOne(["nombre"  => $_GET["n"], 
                                             "correo"  => $_GET["c"],
                                             "mensaje" => $_GET["m"],
                                             "apellido"=> $_GET["a"]]);
    echo "Se insertó el registro con id " . $resultado->getInsertedId(); 



    

?>