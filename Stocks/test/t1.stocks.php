<?php
    include('.../Stocks.php');

    $rank = 1;
    $symbol = "value1";
    $company = "value2";
    $quant = "value3";
    $saAuthors = "value4";
    $wallStreet = "value5";
    $marketCap = "value6";

    $aStock = new Stock($rank,$symbol,$company,$quant,$saAuthors,$wallStreet,$marketCap);
    print_r($aStock);
?>