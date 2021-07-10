<?php

use ShahariaAzam\BDStockExchange\StockExchange\ChittagongStockExchange;
use ShahariaAzam\BDStockExchange\StockExchange\DhakaStockExchange;
use ShahariaAzam\BDStockExchange\StockPrice;

require "vendor/autoload.php";

$dse = new DhakaStockExchange();    // For Dhaka Stock Exchange
// $cse = new ChittagongStockExchange();    // For Chittagong Stock Exchange

$stock = new StockPrice();
$stock->setStockExchange($dse);
// var_dump($stock->getPricing());     // Return PricingEntity[]
var_dump(json_encode($stock->toArray()));        // Return as array