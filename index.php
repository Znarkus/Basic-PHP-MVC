<?php

include 'controllers/hello_world.php';

$controller = new Hello_World_Controller();
$result = $controller->some_action();

include 'views/hello_world.php';