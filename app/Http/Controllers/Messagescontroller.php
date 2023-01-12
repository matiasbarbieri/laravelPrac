<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Messagescontroller extends Controller
{
    public function store()
    {
        return request()->all();
    }
}
