<?php

// Every URL will be routed here.
// We should run different controller/actions depending on the URL
// But this example will always load the "products" controller and 
// run the "all" action.

require 'controllers/products.php';

$controller = new Products_Controller();
$result = $controller->all();

require 'views/products_all.php';