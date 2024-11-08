<?php

class ControladorClientes
{
    static public function ctrMostrarClientes($item, $valor)
    {
        $tabla = "clientes";
        $respuesta = ModeloClientes::mdlMostrarClientes($tabla, $item, $valor);

        return $respuesta;
    }

    public function ctrAgregarCliente()
    {
        if (isset($_POST["nombre_cliente"])) {

            $tabla = "clientes"; //nombre de la tabla            

            $datos = array(
                "nombre_cliente" => $_POST["nombre_cliente"],
                "apellido_cliente" => $_POST["apellido_cliente"],
                "dni_cliente" => $_POST["dni_cliente"],
                "fechaNac_cliente" => $_POST["fechaNac_cliente"],
                "direccion_cliente"=> $_POST["direccion_cliente"],
                "telefono_cliente"=> $_POST["telefono_cliente"],
                "email_cliente"=> $_POST["email_cliente"],
                "fechaIns_cliente"=> $_POST["fechaIns_cliente"],
                "id_plan"=> $_POST["id_plan"],
                "id_estado_memb"=> $_POST["id_estado_memb"]
            );
            //podemos volver a la página de datos
            //print_r($datos);
            //return;

            $url = PlantillaControlador::url() . "clientes";
            $respuesta = ModeloClientes::mdlAgregarCliente($tabla, $datos);

            //print_r($respuesta);
            //return;

            if ($respuesta == "ok") {
                echo '<script>
            fncSweetAlert(
            "success",
            "El cliente se agregó correctamente",
            "' . $url . '"
            );
            </script>';
            }
        }
    }
}