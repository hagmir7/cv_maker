<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\loisirs;

class LoisirsController extends Controller
{
    //
    public function store(Request $request)
    {
        
        $res = $request->validate([
            'loisirs' => '',
            'personne' => '',

        ]);


        $o = loisirs::query()->create($res);
        return redirect()->route('');
    }
}
