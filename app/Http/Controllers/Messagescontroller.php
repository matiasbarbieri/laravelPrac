<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Messagescontroller extends Controller
{
    public function store()
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ]);

        return 'datos validados';
    }
}
