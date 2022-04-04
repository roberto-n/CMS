@extends('layouts.basico')


@section('titulo', 'dowloadpdf' )

@section('conteúdo')
<form action ="{{ route('dowload') }}" method="GET">
<button type="submit" value="Submit">Dowload</button>
</form>
@endsection