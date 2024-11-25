<?php
require_once("conexion.php");

class Experiencia extends Conectar {
    public function listar_experiencia($usu_id) {
        $conectar = parent::Conexion();
        parent::set_names();
        $sql = "SELECT * FROM experiencia WHERE usu_id = ?";
        $stmt = $conectar->prepare($sql);
        $stmt->bindValue(1, $usu_id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function guardar_experiencia($empresa, $puesto, $fecha_inicio, $fecha_fin, $estado, $usu_id) {
        $conectar = parent::Conexion();
        parent::set_names();
        $sql = "INSERT INTO experiencia (empresa, puesto, fecha_inicio, fecha_fin, estado, usu_id) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conectar->prepare($sql);
        $stmt-> bindValue(1, $empresa);
        $stmt->bindValue(2, $puesto);
        $stmt->bindValue(3, $fecha_inicio);
        $stmt->bindValue(4, $fecha_fin);
        $stmt->bindValue(5, $estado);
        $stmt->bindValue(6, $usu_id);
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function actualizar_experiencia($experiencia_id, $empresa, $puesto, $fecha_inicio, $fecha_fin, $estado) {
        $conectar = parent::Conexion();
        parent::set_names();
        $sql = "UPDATE experiencia SET empresa = ?, puesto = ?, fecha_inicio = ?, fecha_fin = ?, estado = ? WHERE experiencia_id = ?";
        $stmt = $conectar->prepare($sql);
        $stmt->bindValue(1, $empresa);
        $stmt->bindValue(2, $puesto);
        $stmt->bindValue(3, $fecha_inicio);
        $stmt->bindValue(4, $fecha_fin);
        $stmt->bindValue(5, $estado);
        $stmt->bindValue(6, $experiencia_id);
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function eliminar_experiencia($experiencia_id) {
        $conectar = parent::Conexion();
        parent::set_names();
        $sql = "DELETE FROM experiencia WHERE experiencia_id = ?";
        $stmt = $conectar->prepare($sql);
        $stmt->bindValue(1, $experiencia_id);
        $stmt->execute();
        return $stmt->rowCount();
    }
}
?>