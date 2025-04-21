<?php

use App\Http\Controllers\PomodoroController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/pomodoro', function () {
    if(session('configPomo')){//Se tiver configurações salvas
        return Inertia::render('Pomodoro',['sessionConfig'=>['configPomo'=>session("configPomo")]]);
    }else{//Configurações Default
        return Inertia::render('Pomodoro',['sessionConfig'=>['configPomo'=>['icon'=>1,"timer"=>25,'tag'=>"estudo"]]]);
    }
})->name("pomodoro");

Route::post('/pomodoro',[PomodoroController::class,"config"])->name('pomodoro.config');

Route::get('/flashcards', function () {
    if(session('configPomo')){//Se tiver configurações salvas
        return Inertia::render('Flashcards',['sessionConfig'=>['configPomo'=>session("configPomo")]]);
    }else{//Configurações Default
        return Inertia::render('Flashcards',['sessionConfig'=>['configPomo'=>['icon'=>1,"timer"=>25,'tag'=>"estudo"]]]);
    }
})->name("pomodoro");
Route::get('/todolist', function () {
    return Inertia::render('Index');
});

Route::get('/analytics', function () {
    return Inertia::render('Index');
});