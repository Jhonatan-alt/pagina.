<?php
require_once("../config/conexion.php");
require_once("../modelos/estudios.php");

$estudios = new Estudios();

switch ($_GET["opc"]) {
    case "listar":
        $datos = $estudios->listar_estudios($_SESSION["usu_id"]);
        $data = array();
        foreach ($datos as $row) {
            $sub_array = array();
            $sub_array[] = $row["institucion"];
            $sub_array[] = $row["titulo"];
            $sub_array[] = $row["fecha_inicio"];
            $sub_array[] = $row["fecha_fin"];
            $sub_array[] = $row["estado"];
            $sub_array[] = '<button type="button" onClick="editar(' . $row["estudio_id"] . ');" class="btn btn-warning">Editar</button>
                            <button type="button" onClick="eliminar(' . $row["estudio_id"] . ');" class="btn btn-danger">Eliminar</button>';
            $data[] = $sub_array;
        }
        $results = array(
            "sEcho" => 1,
            "iTotalRecords" => count($data),
            "iTotalDisplayRecords" => count($data),
            "aaData" => $data
        );
        echo json_encode($results);
        break;
}
?>