<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page extends Controller
{
    public function glavnaja(){
    	return view('pages.glavnaja');
    }

    public function raki(){
    	return view('pages.raki');
    }

    public function recepty(){
        return view('pages.recepty');
    }

    public function otzyvy(){
        return view('pages.otzyvy');
    }

    public function dostavka(){
    	return view('pages.dostavka');
    }

    public function kontakty(){
        return view('pages.kontakty');
    }

    public function politika_konfidentsialnosti(){
        return view('pages.politika_konfidentsialnosti');
    }
}
