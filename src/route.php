<?php
use Illuminate\Support\Facades\Route;

Route::get('demo', function(){
    echo "Hello  packages";
});

Route::get('log',[Ishu\demo\addcontroller::class,'log']);

