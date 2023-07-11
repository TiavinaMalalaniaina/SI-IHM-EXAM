<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('formatMoney')) {
    function formatMoney($number, $decimals = 2, $decimalSeparator = '.', $thousandsSeparator = ' ') {
        return number_format($number, $decimals, $decimalSeparator, $thousandsSeparator);
    }
}

if ( ! function_exists('checkPaiement')) {
    function checkPaiement($aPayer, $argent) {
        if ($argent < $aPayer) throw new Exception('Paiement impossible, manque d\'argent');
        return true;
    }
}

if ( ! function_exists('formatCode')) {
    function formatCode($code) {
        return str_replace(' ', '', $code);
    }
}

?>