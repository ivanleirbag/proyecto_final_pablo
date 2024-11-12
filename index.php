<?php

require 'controladores/plantilla.controlador.php';

require 'controladores/usuarios.controlador.php';
require 'modelos/usuarios.modelo.php';

require 'controladores/clientes.controlador.php';
require 'modelos/clientes.modelo.php';

require 'controladores/estados_membresia.controlador.php';
require 'modelos/estados_membresia.modelo.php';

require 'controladores/estados_pago.controlador.php';
require 'modelos/estados_pago.modelo.php';

require 'controladores/plan.controlador.php';
require 'modelos/plan.modelo.php';

require 'controladores/entrenadores.controlador.php';
require 'modelos/entrenadores.modelo.php';

require 'controladores/especialidades.controlador.php';
require 'modelos/especialidades.modelo.php';

require 'controladores/estEntrenadores.controlador.php';
require 'modelos/estEntrenadores.modelo.php';

require 'controladores/pagos.controlador.php';
require 'modelos/pagos.modelo.php';

require 'controladores/metodosPago.controlador.php';
require 'modelos/metodosPago.modelo.php';

$plantilla = new PlantillaControlador();
$plantilla -> verPlantilla();