<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DowloadController extends Controller
{
   /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function dowloadpdf()
    {
        return view('dowloadpdf');
    }

       /**
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function dowload()
    {
        
        return response()->download("storage/private/pdf.pdf");
    }
}
