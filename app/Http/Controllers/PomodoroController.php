<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PomodoroController extends Controller
{
    // CONFIGURAÇÔES GERAIS DO POMODORO

    public function config(Request $request){
        // dd($request);

        $icon = $request->icon;
        $timer = $request->timer;
        $tag = $request->tag;

        $dados = ['icon'=>$icon,'timer'=>$timer,"tag"=>$tag];
        session(['configPomo' => $dados]);

        return to_route('pomodoro');
    }
}
