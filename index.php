<?php

require 'controladores/plantilla.controlador.php';

require 'controladores/categorias.controlador.php';
require 'modelos/categorias.modelo.php';

require 'controladores/usuarios.controlador.php';
require 'modelos/usuarios.modelo.php';

require 'controladores/productos.controlador.php';
require 'modelos/productos.modelo.php';

require 'controladores/clientes.controlador.php';
require 'modelos/clientes.modelo.php';

require 'controladores/estados_membresia.controlador.php';
require 'modelos/estados_membresia.modelo.php';

$plantilla = new PlantillaControlador();
$plantilla -> verPlantilla();