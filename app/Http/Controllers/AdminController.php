<?php

namespace App\Http\Controllers;

use App\Models\Troc;
use App\Models\Messagerie;
use App\Models\Commentaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    
    public function interface(){
        return view('admin.gestion');
    }
    public function classement(){
        return view('admin.classement');
    }
    public function gallery(){
        return view('admin.gallery');
    }
    public function maps(){
        return view('admin.maps');
    }
    
    public function tab(){
        $mestrocs = Troc::all()->where('user_id', Auth::user()->id)->count();
        $mescommentaires = Commentaire::all()->where('user_id', Auth::user()->id)->count();
        $mesmessages = Messagerie::where('sender_id', Auth::user()->id)->count();
        $totalTrocs = Troc::all()->count();
        // dd($mestrocs);
        return view('Admin.tableau', ['mestrocs'=>$mestrocs, 'totalTrocs'=>$totalTrocs,'mescommentaires'=>$mescommentaires, 'mesmessages'=>$mesmessages]);
    }

}
