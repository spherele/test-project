<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;


class ContactController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Mail::to('info@company.com')->send(new ContactMessage($validated));

        return redirect()->back()->with('success', 'Ваше сообщение отправлено!');
    }

}
