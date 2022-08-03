<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\competences;

class CompetencesController extends Controller
{
    //
    public function store(Request $request)
    {
        
        $res = $request->validate([
            'competences' => '',
            'personne' => '',

        ]);


        $o = competences::query()->create($res);
        return redirect()->route('');
    }
}
