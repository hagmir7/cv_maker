<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\qualites;

class QualitesController extends Controller
{
    //
    public function store(Request $request)
    {
        
        $res = $request->validate([
            'qualites' => '',
            'personne' => '',

        ]);


        $o = qualites::query()->create($res);
        return redirect()->route('');
    }
}
