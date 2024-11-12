<?php

require_once 'conexion.php';

class ModeloEspecialidades
{
    static public function mdlMostrarEspecialidades($tabla, $item, $valor)
    {
        if ($item != null) {
            try {
                $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
                $stmt->bindParam(":" . $item, $valor, PDO::PARAM_INT);
                $stmt->execute();
                return $stmt->fetch(PDO::FETCH_ASSOC);
            } catch (Exception $e) {
                return "Error: " . $e->getMessage();
            }
        } else {
            try {
                $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (Exception $e) {
                return "Error: " . $e->getMessage();
            }
        }
    }

    static public function mdlAgregarEspecialidad($tabla, $datos)
    {
        try {
            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre_especialidad, descrip_especialidad) 
            VALUES (:nombre_especialidad, :descrip_especialidad)");

            $stmt->bindParam(":nombre_especialidad", $datos["nombre_especialidad"], PDO::PARAM_STR);
            $stmt->bindParam(":descrip_especialidad", $datos["descrip_especialidad"], PDO::PARAM_STR);

            if ($stmt->execute()) {
                return "ok";
            } else {
                return "error";
            }
        } catch (Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }

    static public function mdlEliminarEspecialidad($tabla, $id)
    {
        try {
            $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_especialidad = :id_especialidad");
            $stmt->bindParam(":id_especialidad", $id, PDO::PARAM_INT);

            if ($stmt->execute()) {
                return "ok";
            } else {
                return "error";
            }
        } catch (Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }

    static public function mdlModificarEspecialidad($tabla, $datos)
    {
        try {
            $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET 
                nombre_especialidad = :nombre_especialidad, 
                descrip_especialidad = :descrip_especialidad
                WHERE id_especialidad = :id_especialidad");

            $stmt->bindParam(":nombre_especialidad", $datos["nombre_especialidad"], PDO::PARAM_STR);
            $stmt->bindParam(":descrip_especialidad", $datos["descrip_especialidad"], PDO::PARAM_STR);
            $stmt->bindParam(":id_especialidad", $datos["id_especialidad"], PDO::PARAM_INT);

            if ($stmt->execute()) {
                return "ok";
            } else {
                return "error";
            }
        } catch (Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }
}

