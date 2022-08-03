<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\langues;

class LanguesController extends Controller
{
    //
    public function store(Request $request)
    {
        
        $res = $request->validate([
            'langues' => '',
            'niveau' => '',
            'personne' => '',

        ]);


        $o = langues::query()->create($res);
        return redirect()->route('');
    }
}
