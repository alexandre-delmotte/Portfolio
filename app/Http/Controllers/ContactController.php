<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    public function send(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);


        Mail::to('alexandre.delmotte.dev@gmail.com')->send(new ContactMessage($validated));

        return redirect('/#contact')->with('success', 'Votre message a été envoyé avec succès ! Je vous réponds très vite.');
    }
}
