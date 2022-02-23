@extends('layouts.basico')


@section('titulo', 'adm' )

@section('conteúdo')
<p>Titulo atual:</p>
<p></p>
<p>imagem atual:</p>
<img>
<div>
<form action="{{ route('salvar') }}" method="POST" enctype="multipart/form-data">
@csrf
<label  for = "titulo" >Titulo da pagina  </label >
<input type="text" name="titulo" > </input>
<label  for = "nomeimg" >Nome  Da imagem  </label >
<input type="text" name="nomeimg" > </input>
<label  for = "img" >Imagem da pagina  </label >
<input type="file" name="img" > </input>
<button type="submit" value="Submit">Cadastrar</button>
</form>
</div>
<div>
<form action="{{ route('relatorio') }}" método ="GET">
@csrf
<p>Emitir Relatorio </p>
<button type="submit" value="Submit">Relatorio</button>
</form>
</div>


@endsection