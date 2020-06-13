<?php
//include "../pags/conexion.php";
//include_once "../categorias/categorias.php";
//print_r(getProductos($conexion));


function tabla_productos($conexion){
    $productos = getProductos($conexion);
    echo "<table class='table'>";
    echo "<thead class='thead-dark'>";
    echo "<tr>
        <th scope='col'>ID</th>
        <th scope='col'>Nombre</th>
        <th scope='col'>Descripción</th>
        <th scope='col'>Precio</th>
        <th scope='col'>Categoría</th>
        <th scope='col'>Editar</th>
        <th scope='col'>Eliminar</th>
    </tr>";
    echo "</thead>";
    echo "<tbdoy>";
    foreach($productos as $producto){
        echo "<tr>
            <td>".$producto['id']."</td>
            <td>".$producto['nombre']."</td>
            <td>".$producto['descripcion']."</td>
            <td>$".number_format($producto['precio'],2)."</td>
            <td>".getNombreCategoria($producto['categorias_id'],$conexion)."</td>
            <td><a href='editar_producto.php?id=".$producto['id']."'>Editar</a> </td>
            <td><a href='#' onclick='confirmacion(".$producto['id'].")'>Eliminar</a> </td>
        </tr>";
    }
    echo "</tbody>";
    echo "</table>";
}


function getProductos($conexion){
    $sql = "SELECT * FROM productos";

    if($datos = mysqli_query($conexion,$sql)){
        return mysqli_fetch_all($datos,MYSQLI_ASSOC);
    }else{
        echo "No se pudo ejecutar la consulta";
    }

}

function getProductosPorCategoria($id_categoria,$conexion){
    $sql = "SELECT * FROM productos WHERE categorias_id='$id_categoria'";
   // echo $sql;
    
    if($datos = mysqli_query($conexion,$sql)){
        return mysqli_fetch_all($datos,MYSQLI_ASSOC);
    }else{
        echo "No se pudo ejecutar la consulta";
    }

}


function getProducto($id,$conexion){
    $sql = "SELECT * FROM productos WHERE id = '$id'";

    if($datos = mysqli_query($conexion,$sql)){
        return mysqli_fetch_object($datos);
    }else{
        echo "no hubo resultados";
    }
}




function llenar_tarjeta($nombre,$precio,$descripcion){
    echo '<div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">'.$nombre.'</a>
                </h4>
                <h5>$'.number_format($precio,2).'</h5>
                <p class="card-text">'.$descripcion.'</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>';
}


?>