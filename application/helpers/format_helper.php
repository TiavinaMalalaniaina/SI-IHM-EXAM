<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    if ( ! function_exists('format_to_money')) {
        function formatMoney($number, $decimals = 2, $decimalSeparator = '.', $thousandsSeparator = ' ') {
            return number_format($number, $decimals, $decimalSeparator, $thousandsSeparator);
        }
    }

?>