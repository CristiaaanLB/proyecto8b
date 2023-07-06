<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Mail\MessagesReceived;

use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store(){
        $message = request()->validate([

            'name'=> 'required',
            'email'=> 'required',
            'subject'=> 'required',
            'content'=> 'required'

        ],[
            'name.required' =>  'Necesito tu nombre'
        ]);

        // Mail::to('webmaster@correo.com')->queue(new MessagesReceived($message));
        // return 'Mensaje enviado';

        return new MessagesReceived($message);
    }
}
