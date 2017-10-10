<?php
/**
 * Created by PhpStorm.
 * User: rfrancoa
 * Date: 06/10/2017
 * Time: 14:33
 */

class CurrencyConverter {

    private $baseValue = 0;

    private $rates = [
        'GBP' => 1.0,
        'USD' => 0.6,
        'EUR' => 0.83,
        'YEN' => 0.0058
    ];



    public function get($currency) {
        if (isset($this->rates[$currency])) {
            $rate = 1/$this->rates[$currency];
            return round($this->baseValue * $rate, 2);
        }
        else return 0;
    }

    public function set($amount, $currency) {
        if (isset($this->rates[$currency])) {
            $this->baseValue = $amount * $this->rates[$currency];
        }
    }

    public function print_results(){
        $currency = $_POST['input'][0];
        $amount = $_POST['input'][1];

        echo $amount . ' ' . $currency . ' is: <br>';

        foreach (array_keys($this->rates) as $rate) {
            if ($rate != $currency) {
                $this->set($amount, $currency);
                echo '* ' . $this->get($rate) . ' ' . $rate . ' <br> ';
            }
        }
    }
}

// Example code. OUTPUT --> 100 GBP is: 166.67 USD / 120.48 EUR / 17241.38 YEN
//$currencyConverter1 = new CurrencyConverter;
//$currencyConverter1->set(100, 'GBP');
//
//echo '100 GBP is: <br>';
//echo $currencyConverter1->get('USD') . ' USD <br> ';
//echo $currencyConverter1->get('EUR') . ' EUR <br> ';
//echo $currencyConverter1->get('YEN') . ' YEN';