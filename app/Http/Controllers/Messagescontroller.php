<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;

class Messagescontroller extends Controller
{
    public function store()
    {
        $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ]);

        //enviar el email
        //Mail::to('matias.nbarbieri@gmail.com')->queue(new MessageReceived($message));

        //provisorio para ver el mail enviado en el navegador
        return new MessageReceived($message);

        return 'Mensaje Enviado';
    }
}
