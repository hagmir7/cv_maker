<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\experiences;

class ExperiencesController extends Controller
{
    //
    public function store(Request $request)
    {
        
        $res = $request->validate([
            'exprience' => '',
            'employeur' => '',
            'date_debut' => '',
            'date_fin' => '',
            'ville' => '',
            'descriptin' => '',
            'personne' => '',

        ]);


        $o = experiences::query()->create($res);
        return redirect()->route('');
    }
}
