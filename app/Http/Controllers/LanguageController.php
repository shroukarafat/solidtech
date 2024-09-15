<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function setLanguage(Request $request)
    {
        $lang = $request->input('lang', 'en'); 
        session(['lang' => $lang]);
        return redirect()->back();
    }
   
}
