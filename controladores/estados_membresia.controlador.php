<?php

class ControladorEstadosMembresia
{
    static public function ctrMostrarEstados($item, $valor)
    {
        $tabla = "estados_membresias";
        $respuesta = ModeloEstadosMembresia::mdlMostrarEstados($tabla, $item, $valor);

        return $respuesta;
    }

    public function ctrAgregarEstado()
    {
        if (isset($_POST["estado_memb"])) {

            $tabla = "estados_membresias";    

            $datos = array(
                "estado_memb" => $_POST["estado_memb"],
                "desc_estado_memb" => $_POST["desc_estado_memb"]
            );

            $url = PlantillaControlador::url() . "estados_memb";
            $respuesta = ModeloEstadosMembresia::mdlAgregarEstado($tabla, $datos);

            if ($respuesta == "ok") {
                echo '<script>
            fncSweetAlert(
            "success",
            "El estado se agregó correctamente",
            "' . $url . '"
            );
            </script>';
            }
        }
    }

    public function ctrEditarEstado()
    {
        if (isset($_POST["id_estado_memb"])) {

            $tabla = "estados_membresias";

            $datos = array(
                "id_estado_memb"=> $_POST["id_estado_memb"],
                "estado_memb" => $_POST["estado_memb"],
                "desc_estado_memb" => $_POST["desc_estado_memb"]
            );

            $url = PlantillaControlador::url() . "estados_memb";
            $respuesta = ModeloEstadosMembresia::mdlEditarEstado($tabla, $datos);

            if ($respuesta == "ok") {
                echo '<script>
            fncSweetAlert(
            "success",
            "El estado se actualizó correctamente",
            "' . $url . '"
            );
            </script>';
            exit();
            }
        }
    }
    static public function ctrEliminarEstado()
    {
        $url = PlantillaControlador::url() . "estados_memb";
        if (isset($_GET["id_estado_memb_eliminar"])) {
            $tabla = "estados_membresias";
            $datos = $_GET["id_estado_memb_eliminar"];
            $respuesta = ModeloEstadosMembresia::mdlEliminarEstado($tabla, $datos);
            if ($respuesta == "ok") {

                echo '<script>
                fncSweetAlert("success", "El estado se eliminó correctamente", "' . $url . '");
                </script>';
            }
        }
    }
}