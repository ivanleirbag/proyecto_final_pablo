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

$plantilla = new PlantillaControlador();
$plantilla -> verPlantilla();