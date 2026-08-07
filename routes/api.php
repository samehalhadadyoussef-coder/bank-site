
<?php

use Illuminate\Support\Facades\Route;


Route::get('/banks', function () {
    return response()->json([
        ["id"=>1,"name"=>"National Bank of Egypt","short"=>"NBE"],
        ["id"=>2,"name"=>"Banque Misr","short"=>"BM"],
        ["id"=>3,"name"=>"Commercial International Bank","short"=>"CIB"],
        ["id"=>4,"name"=>"Banque du Caire","short"=>"BDC"],
        ["id"=>5,"name"=>"QNB Alahli","short"=>"QNB"],
        ["id"=>6,"name"=>"AlexBank","short"=>"ALEX"],
        ["id"=>7,"name"=>"Faisal Islamic Bank","short"=>"FIB"],
        ["id"=>8,"name"=>"Al Baraka Bank","short"=>"ABB"],
        ["id"=>9,"name"=>"Suez Canal Bank","short"=>"SCB"],
        ["id"=>10,"name"=>"Housing & Development Bank","short"=>"HDB"],
        ["id"=>11,"name"=>"Abu Dhabi Islamic Bank","short"=>"ADIB"],
        ["id"=>12,"name"=>"National Bank of Kuwait","short"=>"NBK"],
        ["id"=>13,"name"=>"Emirates NBD","short"=>"ENBD"],
        ["id"=>14,"name"=>"Crédit Agricole Egypt","short"=>"CAE"],
        ["id"=>15,"name"=>"HSBC Egypt","short"=>"HSBC"],
        ["id"=>16,"name"=>"The United Bank","short"=>"UB"],
    ]);
});