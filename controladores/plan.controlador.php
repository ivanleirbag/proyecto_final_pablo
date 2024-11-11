<?php

class ControladorPlanes
{
    /*=============================================
    MOSTRAR PLANES
    =============================================*/
    static public function ctrMostrarPlanes($item, $valor)
    {
        $tabla = "plan";
        $respuesta = ModeloPlanes::mdlMostrarPlanes($tabla, $item, $valor);
        return $respuesta;
    }

    /*=============================================
    AGREGAR PLAN
    =============================================*/
    public function ctrAgregarPlan()
    {
        if (isset($_POST["nombre_plan"])) {

            $tabla = "plan";

            $datos = array(
                "descrip_plan" => $_POST["descrip_plan"],
                "cod_plan" => $_POST["cod_plan"],
                "duracion_plan" => $_POST["duracion_plan"],
                "sesiones_semanales_plan" => $_POST["sesiones_semanales_plan"],
                "nombre_plan" => $_POST["nombre_plan"],
                "id_entrenador" => $_POST["id_entrenador"]
            );

            $url = PlantillaControlador::url() . "planes_entrenamiento";
            $respuesta = ModeloPlanes::mdlAgregarPlan($tabla, $datos);
            if ($respuesta == "ok") {
                echo '<script>
                fncSweetAlert(
                    "success",
                    "El plan se agregó correctamente",
                    "' . $url . '"
                );
                </script>';
            }
        }
    }

    /*=============================================
    EDITAR PLAN
    =============================================*/
    public function ctrEditarPlan()
    {
        if (isset($_POST["id_plan"])) {

            $tabla = "plan";

            $datos = array(
                "descrip_plan" => $_POST["descrip_plan"],
                "cod_plan" => $_POST["cod_plan"],
                "duracion_plan" => $_POST["duracion_plan"],
                "sesiones_semanales_plan" => $_POST["sesiones_semanales_plan"],
                "nombre_plan" => $_POST["nombre_plan"],
                "id_entrenador" => $_POST["id_entrenador"],
                "id_plan" => $_POST["id_plan"]
            );

            $url = PlantillaControlador::url() . "planes_entrenamiento";
            $respuesta = ModeloPlanes::mdlEditarPlan($tabla, $datos);

            if ($respuesta == "ok") {
                echo '<script>
                fncSweetAlert(
                    "success",
                    "El plan se actualizó correctamente",
                    "' . $url . '"
                );
                </script>';
            }
        }
    }

    /*=============================================
    ELIMINAR PLAN
    =============================================*/
    static public function ctrEliminarPlan()
    {
        $url = PlantillaControlador::url() . "planes_entrenamiento";
        if (isset($_GET["id_plan_eliminar"])) {
            $tabla = "plan";
            $datos = $_GET["id_plan_eliminar"];
            $respuesta = ModeloPlanes::mdlEliminarPlan($tabla, $datos);

            if ($respuesta == "ok") {
                echo '<script>
                fncSweetAlert("success", "El plan se eliminó correctamente", "' . $url . '");
                </script>';
            }
        }
    }
}
