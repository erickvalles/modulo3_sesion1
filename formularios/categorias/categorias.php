<?php
//include "conexion.php";



function tabla_categorias($conexion){
    $categorias = getCategorias($conexion);
    echo "<table class='table'>";
    echo "<thead class='thead-dark'>";
    echo "<tr>
        <th scope='col'>ID</th>
        <th scope='col'>Nombre</th>
        <th scope='col'>Editar</th>
        <th scope='col'>Eliminar</th>
    </tr>";
    echo "</thead>";
    echo "<tbdoy>";
    foreach($categorias as $categoria){
        echo "<tr>
            <td>".$categoria['id']."</td>
            <td>".$categoria['nombre']."</td>
            <td><a href='editar_categorias.php?id=".$categoria['id']."'>Editar</a> </td>
            <td><a href='#' onclick='confirmacion(".$categoria['id'].")'>Eliminar</a> </td>
        </tr>";
    }
    echo "</tbody>";
    echo "</table>";
}

function getCategorias($conexion){
    if(!$conexion){
        echo "no existe una conexión";
    }else{
        $sql = "SELECT * from categorias";
        if($datos = mysqli_query($conexion,$sql)){
            $filas = mysqli_fetch_all($datos,MYSQLI_ASSOC);
            return $filas;
        }else{
            echo "Error en la consulta ".mysqli_error($conexion);
        }
    }
}

function menu_categorias($subnivel,$conexion){
    $categorias = getCategorias($conexion);
    foreach($categorias as $categoria){
        if($subnivel){
            echo '<a href="../productos_por_categoria.php?id_categoria='.$categoria['id'].'" class="list-group-item">'.$categoria['nombre'].'</a>';
        }else{
            echo '<a href="productos_por_categoria.php?id_categoria='.$categoria['id'].'" class="list-group-item">'.$categoria['nombre'].'</a>';
        }
        
    }
}


function getCategoria($id,$conexion){
    $sql = "SELECT * FROM categorias WHERE id = '$id'";

    if($datos = mysqli_query($conexion,$sql)){
        return mysqli_fetch_object($datos);
    }else{
        echo "no hubo resultados";
    }
}

function getNombreCategoria($id,$conexion){
    $categoria = getCategoria($id,$conexion);
    return $categoria->nombre;
}





?>