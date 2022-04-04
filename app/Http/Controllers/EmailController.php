<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\pdf;


class EmailController extends Controller
{
    public function enviaemail()
    {
        
        Mail::send(new pdf());
        return ['msg' =>'email enviado'];
    }
}
