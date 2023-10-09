<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function tab(){
        return view('admin.tableau');
    }
    
    // public function publication(){
    //     return view('admin.publication');
    // }
    public function searchresult(){
        return view('admin.search-result');
    }
    public function messagerie(){
        return view('admin.messagerie');
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
}
