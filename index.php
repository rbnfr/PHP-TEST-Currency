<?php

// Make sure errors are displayed. Change this when the site is public.
//error_reporting(E_ALL | E_STRICT);
//ini_set('display_errors', 1);

// Every URL will be routed here.
// We should run different controller/actions depending on the URL

require 'controllers/currencyController.php';

$money ->set(500,'GPB');
$result = $money ->get(100);


require 'views/main_view.php';