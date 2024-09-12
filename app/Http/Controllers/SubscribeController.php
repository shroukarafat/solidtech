<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function showForm()
    {
        return view('subscribe');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

       

        return redirect()->back()->with('success', 'You have subscribed successfully!');
    }
}
