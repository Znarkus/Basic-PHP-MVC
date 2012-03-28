<?php

// Make sure errors are displayed. Change this when the site is public.
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);

// Every URL will be routed here.
// We should run different controller/actions depending on the URL
// But this example will always load the "products" controller and 
// run the "all" action.

require 'controllers/products.php';

$controller = new Products_Controller();
$result = $controller->all();

require 'views/products_all.php';