@extends('layouts.basico')


@section('titulo', 'cadastro' )

@section('conteúdo')

@if($viewinfo)
<img src="/images/{{ viewinfo->nomeimg }}.jpg">
<p>{{viewinfo->titulo}}</p>
@else
@endif
<classe div="contêiner">

<form action ="{{ route('cadastro.store') }}" method="POST">
        @csrf
        <label  for = " nome " >Nome  </ label >
        <input type="text" name = " nome  " > </input>
        @error('nome')
    <div class="alert alert-danger">{{ $message }}</div>
        @enderror

         <br>         
        <label  for = " idade " >Idade</ label >
        <input  type = " text "  name = "idade" ></input>
             
        @error('idade')
    <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>  
        <label  for = " email" >E-mail</label >
        <input  type = " text "  name = "email" ></input>
        @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
        @enderror
<br>         
        <label  for = " contato " >Telefone</label>
        <input type="tel" name = "contato" ></input>
        @error('contato')
    <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" value="Submit">Cadastrar</button>
  </form>
</div>
@endsection