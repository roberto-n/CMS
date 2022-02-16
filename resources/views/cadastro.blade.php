@extends('layouts.basico')


@section('titulo', 'cadastro' )

@section('conteúdo')
<classe div="contêiner">
    <form action =""método ="POST">
        @csrf
        <label  for = " nome " >Nome  </ label >
        <input type="text" nome = " nome  " > </input>
<br>         
        <label  for = " idade " >Idade</ label >
        <input  type = " text "  name = " idade " ></input>
        <br>        
        <label  for = " email" >E-mail</label >
        <input  type = " text "  name = " email " ></input>
<br>         
        <label  for = " contato " >Telefone</label>
        <input type="tel" nome = " contato " ></input>
        <button type="submit" value="Submit">Cadastrar</button>
  </form>
</div>
@endsection