<?php

class ControladorPagos
{
    static public function ctrMostrarPagos($item, $valor)
    {
        $tabla = "pagos";
        $respuesta = ModeloPagos::mdlMostrarPagos($tabla, $item, $valor);
        return $respuesta;
    }

    public function ctrAgregarPago()
    {
        if (isset($_POST["fecha_pago"])) {

            $tabla = "pagos"; //nombre de la tabla            

            $datos = array(
                "fecha_pago" => $_POST["fecha_pago"],
                "monto_pago" => $_POST["monto_pago"],
                "id_cliente" => $_POST["id_cliente"],
                "id_estado" => $_POST["id_estado"],
                "id_metodopago"=> $_POST["id_metodopago"]
            );
            //podemos volver a la página de datos
            //print_r($datos);
            //return;

            $url = PlantillaControlador::url() . "pagos";
            $respuesta = ModeloPagos::mdlAgregarPago($tabla, $datos);

            //print_r($respuesta);
            //return;

            if ($respuesta == "ok") {
                echo '<script>
            fncSweetAlert(
            "success",
            "El pago se agregó correctamente",
            "' . $url . '"
            );
            </script>';
            }
        }
    }

    public function ctrEditarPago()
    {
        if (isset($_POST["id_pago"])) {

            $tabla = "pagos"; //nombre de la tabla

            $datos = array(
                "id_pago" => $_POST["id_pago"],
                "fecha_pago" => $_POST["fecha_pago"],
                "monto_pago" => $_POST["monto_pago"],
                "id_cliente" => $_POST["id_cliente"],
                "id_estado" => $_POST["id_estado"],
                "id_metodopago"=> $_POST["id_metodopago"]
            );

            $url = PlantillaControlador::url() . "pagos";
            $respuesta = ModeloPagos::mdlEditarPago($tabla, $datos);

            if ($respuesta == "ok") {
                echo '<script>
            fncSweetAlert(
            "success",
            "El pago se actualizó correctamente",
            "' . $url . '"
            );
            </script>';
            }
        }
    }
    static public function ctrEliminarPago()
    {
        $url = PlantillaControlador::url() . "pagos";
        if (isset($_GET["id_pago_eliminar"])){
            $tabla = "pagos";
            $datos = $_GET["id_pago_eliminar"];
            $respuesta = ModeloPagos::mdlEliminarPago($tabla, $datos);
            if ($respuesta == "ok") {

                echo '<script>
                fncSweetAlert("success", "El pago se eliminó correctamente", "' . $url . '");
                </script>';
            }
        }
    }
}