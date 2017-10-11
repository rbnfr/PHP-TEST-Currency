<?php
/**
 * Created by PhpStorm.
 * User: rfrancoa
 * Date: 11/10/2017
 * Time: 9:00
 */

class Debug{
    function console($data) {
        echo("<script>console.log('PHP: ".$data."');</script>");
    }
}