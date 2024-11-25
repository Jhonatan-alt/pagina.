<?php
require_once("../config/conexion.php");
require_once("../modelos/SocialMedia.php");

$socialMedia = new SocialMedia();

switch ($_GET["opc"]) {
    case "listar":
        $datos = $socialMedia->get_socialMedia();
        $data = array();
        foreach ($datos as $row) {
            $sub_array = array();
            $sub_array[] = '<i class="' . $row["socmed_icono"] . '"></i>'; // Asumiendo que el icono es una clase de FontAwesome
            $sub_array[] = $row["socmed_url"];
            $sub_array[] = '<button type="button" onClick="mostrar(' . $row["socmed_id"] . ');" class="btn btn-warning">Editar</button>
                            <button type="button" onClick="eliminar(' . $row["socmed_id"] . ');" class="btn btn-danger">Eliminar</button>';
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
``