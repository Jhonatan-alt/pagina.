<?php
require_once("conexion.php");

class Estudios extends Conectar {
    public function listar_estudios($usu_id) {
        $conectar = parent::Conexion();
        parent::set_names();
        $sql = "SELECT * FROM estudios WHERE usu_id = ?";
        $stmt = $conectar->prepare($sql);
        $stmt->bindValue(1, $usu_id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function guardar_estudio($institucion, $titulo, $fecha_inicio, $fecha_fin, $estado, $usu_id) {
        $conectar = parent::Conexion();
        parent::set_names();
        $sql = "INSERT INTO estudios (institucion, titulo, fecha_inicio, fecha_fin, estado, usu_id) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conectar->prepare($sql);
        $stmt->bindValue(1, $institucion);
        $stmt->bindValue(2, $titulo);
        $stmt->bindValue(3, $fecha_inicio);
        $stmt->bindValue(4, $fecha_fin);
        $stmt->bindValue(5, $estado);
        $stmt->bindValue(6, $usu_id);
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function actualizar_estudio($estudio_id, $institucion, $titulo, $fecha_inicio, $fecha_fin, $estado) {
        $conectar = parent::Conexion();
        parent::set_names();
        $sql = "UPDATE estudios SET institucion = ?, titulo = ?, fecha_inicio = ?, fecha_fin = ?, estado = ? WHERE estudio_id = ?";
        $stmt = $conectar->prepare($sql);
        $stmt->bindValue(1, $institucion);
        $stmt->bindValue(2, $titulo);
        $stmt->bindValue(3, $fecha_inicio);
        $stmt->bindValue(4, $fecha_fin);
        $stmt->bindValue(5, $estado);
        $stmt->bindValue(6, $estudio_id);
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function eliminar_estudio($estudio_id) {
        $conectar = parent::Conexion();
        parent::set_names();
        $sql = "DELETE FROM estudios WHERE estudio_id = ?";
        $stmt = $conectar->prepare($sql);
        $stmt->bindValue(1, $estudio_id);
        $stmt->execute();
        return $stmt->rowCount();
    }
}
?>