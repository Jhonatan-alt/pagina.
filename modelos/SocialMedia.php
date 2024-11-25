<?php
require_once("conexion.php");

class SocialMedia extends Conectar {
    public function listar_socialMedia($usu_id) {
        $conectar = parent::Conexion();
        parent::set_names();
        $sql = "SELECT * FROM social_media WHERE usu_id = ?";
        $stmt = $conectar->prepare($sql);
        $stmt->bindValue(1, $usu_id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function insertar_socialMedia($socmed_icono, $socmed_url, $usu_id) {
        $conectar = parent::Conexion();
        parent::set_names();
        $sql = "INSERT INTO social_media (socmed_icono, socmed_url, usu_id) VALUES (?, ?, ?)";
        $stmt = $conectar->prepare($sql);
        $stmt->bindValue(1, $socmed_icono);
        $stmt->bindValue(2, $socmed_url);
        $stmt->bindValue(3, $usu_id);
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function actualizar_socialMedia($socmed_id, $socmed_icono, $socmed_url) {
        $conectar = parent::Conexion();
        parent::set_names();
        $sql = "UPDATE social_media SET socmed_icono = ?, socmed_url = ? WHERE socmed_id = ?";
        $stmt = $conectar->prepare($sql);
        $stmt->bindValue(1, $socmed_icono);
        $stmt->bindValue(2, $socmed_url);
        $stmt->bindValue(3, $socmed_id);
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function eliminar_socialMedia($socmed_id) {
        $conectar = parent::Conexion();
        parent::set_names();
        $sql = "DELETE FROM social_media WHERE socmed_id = ?";
        $stmt = $conectar->prepare($sql);
        $stmt->bindValue(1, $socmed_id);
        $stmt->execute();
        return $stmt->rowCount();
    }
}
?>