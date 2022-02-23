<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adm;
use App\Exports\CadastroExport;

use Maatwebsite\Excel\Facades\Excel;


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
        if($request->hasFile('img')&& $request->file('img')->isValid()){
            
            $titulo=$request->nameimg.time().'.'.$request->img->extension(); ;
            $path=$request->img->move(public_path('images'), $titulo);
            $store = new Adm;
     
            $store->titulo=$request->titulo;
            $store->nomeimg=$request->nomeimg;
            $store->path=$path;
     
            
            $store->save();


        }else{
            $store = new Adm;
            $store->titulo=$request->titulo;
            $store->save();
            return view('welcome');

        }
      
       
       return view('welcome');
    }
    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function relatorio()
    {
        return Excel::download(new CadastroExport, 'cadastro.xlsx');
    }
}
