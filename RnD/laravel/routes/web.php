<?php

use Illuminate\Support\Facades\Route;
use Simon\BDShareMarket;

Route::get('/', function () {

    $BDShareMarket = new BDShareMarket();
    dd($BDShareMarket->getDSEData());
});
