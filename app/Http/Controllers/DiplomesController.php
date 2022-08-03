<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\diplomes;

class DiplomesController extends Controller
{
    //
    public function store(Request $request)
    {
        
        $res = $request->validate([
            'diplome' => '',
            'etablissement' => '',
            'ville' => '',
            'date_obtention' => '',
            'description' => '',
            'personne' => '',

        ]);


        $o = diplomes::query()->create($res);
        return redirect()->route('');
    }
}
