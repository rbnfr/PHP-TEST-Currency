<?php
/**
 * Created by PhpStorm.
 * User: rfrancoa
 * Date: 09/10/2017
 * Time: 8:38
 */

require_once ("../model/CurrencyConverter.php");
class currencyController {
   // Call to the model
    public $currencyConverter1;

    function printable(){
        echo "I'm a printed text";
    }

    /**
     *
     */
    function conversion(){
        try {
            $currencyConverter1 = new CurrencyConverter;
            $currencyConverter1->print_results();
        } catch (mysqli_sql_exception $ex){

        }
    }


        //$money->get(100);


}

