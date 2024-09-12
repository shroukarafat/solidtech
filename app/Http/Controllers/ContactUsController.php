<?php

namespace App\Http\Controllers;

use App\Models\contact_us;


use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function showForm()
    {
        return view('front.contact-us');
    }

    
    
        public function submitForm(Request $request)
        {
            
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:20',
                'company' => 'required|string|max:255',
                'message' => 'required|string',
                'subscribe' => 'nullable|boolean',
            ]);
    
            
            contact_us::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'company' => $request->company,
                'message' => $request->message,
                'is_subscribed' => $request->subscribe ? true : false,
            ]);
           
    
            
            return redirect()->back()->with('success', 'Your message has been sent successfully!');
        }
}
