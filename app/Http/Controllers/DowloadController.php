<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DowloadController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dowloadpdf()
    {
        return view('dowloadpdf');
    }

       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dowload()
    {
        return response()->dowload("storage/private/pdf.pdf");
    }
}
