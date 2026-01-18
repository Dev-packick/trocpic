<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Troc;

class TrocsController extends Controller
{
    //

    public function details(Troc $troc)
    {
        $troc->load('user'); // Charge la relation user du troc
        return view('Client.details', compact('troc'));
    }
}
