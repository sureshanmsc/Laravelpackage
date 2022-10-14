<?php

Route::get('samplepackage', function () {
    dump('This is from sample package page');
});


Route::get('concat/{s1}/{s2}',[Suresh\Samppackage\SamppackageController::class,'concat']);
Route::get('concatrev/{s1}/{s2}',[Suresh\Samppackage\SamppackageController::class,'concatrev']);
