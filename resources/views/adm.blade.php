@extends('layouts.basico')


@section('titulo', 'adm' )

@section('conteúdo')


<p>Titulo atual:</p>
@if($viewinfo)
<p>{{viewinfo->titulo}}</p>
@else
<p></p>
@endif
<p>imagem atual:</p>
@if($viewinfo)
<img src="/images/{{ viewinfo->nomeimg }}.jpg">
@else
<img>
@endif
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