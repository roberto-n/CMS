@extends('layouts.basico')


@section('titulo', 'adm' )

@section('conteúdo')

<form action="" método ="POST" enctype="multipart/form-data">
@csrf
<p>Titulo atual:</p>
<p></p>
<label  for = "titulo" >Titulo da pagina  </label >
<input type="text" nome = "titulo" > </input>
<p>imagem atual:</p>
<img>
<label  for = "nomeimg" >Nome  Da imagem  </label >
<input type="text" nome = "nomeimg" > </input>
<label  for = "img" >Imagem da pagina  </label >
<input type="file" nome = "img" > </input>
<button type="submit" value="Submit">Cadastrar</button>
</form>


<form action="" método ="POST">
@csrf
<p>Emitir Relatorio </p>
<button type="submit" value="Submit">Relatorio</button>
</form>



@endsection