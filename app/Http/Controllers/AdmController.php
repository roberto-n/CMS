<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adm;

class AdmController extends Controller
{
      /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adm');
    }
     /**
     * 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
       $validatedData = $request->validate([
        'img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

       ]);
       
       $path = $request->file('img')->store('public/images');
       $store = new Adm;

       $store->titulo=$request->titulo;
       $store->nomeimg=$request->titulo;
       $store->$path;

       
       $store->save();
       return view('welcome');
    }
    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function relatorio()
    {
        return view('dowload');
    }
}
