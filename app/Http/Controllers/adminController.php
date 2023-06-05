<?php

namespace App\Http\Controllers;

use App\Models\data;
use Illuminate\Http\Request;

class adminController extends Controller
{


    //had cnroller kiselah ay fonction or methode bghity tsiftha lview  html (blade )rah kadrha hna okatsiftha lih mn hna

    public function getdataCount()
    {
        $count = data::count();

        return view('new1', compact('count'));
    }

}
