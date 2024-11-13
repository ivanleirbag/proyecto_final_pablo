<?php

class ControladorEstadosPago
{
    static public function ctrMostrarEstados($item, $valor)
    {
        $tabla = "estados_pago";
        $respuesta = ModeloEstadosPago::mdlMostrarEstados($tabla, $item, $valor);

        return $respuesta;
    }

    public function ctrAgregarEstado()
    {
        if (isset($_POST["estado_pago"])) {

            $tabla = "estados_pago";    

            $datos = array(
                "estado_pago" => $_POST["estado_pago"],
            );

            $url = PlantillaControlador::url() . "estados_pago";
            $respuesta = ModeloEstadosPago::mdlAgregarEstado($tabla, $datos);

            if ($respuesta == "ok") {
                echo '<script>
            fncSweetAlert(
            "success",
            "El estado se agregó correctamente",
            "' . $url . '"
            );
            </script>';
            }else{
                echo '<script>
            fncSweetAlert(
            "error",
            "'.$respuesta.'",
            "' . $url . '"
            );
            </script>';
            }
        }
    }

    public function ctrEditarEstado()
    {
        if (isset($_POST["id_estado_pago"])) {

            $tabla = "estados_pago";

            $datos = array(
                "id_estado_pago"=> $_POST["id_estado_pago"],
                "estado_pago" => $_POST["estado_pago"],
            );

            $url = PlantillaControlador::url() . "estados_pago";
            $respuesta = ModeloEstadosPago::mdlEditarEstado($tabla, $datos);
            var_dump($respuesta);
            if ($respuesta == "ok") {
                echo '<script>
            fncSweetAlert(
            "success",
            "El estado se actualizó correctamente",
            "' . $url . '"
            );
            </script>';
            }else{
                echo '<script>
            fncSweetAlert(
            "error",
            "'.$respuesta.'",
            "' . $url . '"
            );
            </script>';
            }
        }
    }
    static public function ctrEliminarEstado()
    {
        $url = PlantillaControlador::url() . "estados_pago";
        if (isset($_GET["id_estado_pago_eliminar"])) {
            $tabla = "estados_pago";
            $datos = $_GET["id_estado_pago_eliminar"];
            $respuesta = ModeloEstadosPago::mdlEliminarEstado($tabla, $datos);
            if ($respuesta == "ok") {

                echo '<script>
                fncSweetAlert("success", "El estado se eliminó correctamente", "' . $url . '");
                </script>';
            }else{
                echo '<script>
            fncSweetAlert(
            "error",
            "'.$respuesta.'",
            "' . $url . '"
            );
            </script>';
            }
        }
    }
}