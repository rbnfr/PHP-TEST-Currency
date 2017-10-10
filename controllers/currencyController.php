<?php
/**
 * Created by PhpStorm.
 * User: rfrancoa
 * Date: 09/10/2017
 * Time: 8:38
 */

// Call to the model
require_once("../model/CurrencyConverter.php");
$money = new CurrencyConverter();
//$money->get(100);

return $money;

