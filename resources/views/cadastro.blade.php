@extends ( ' layouts.basico ' )


@section ( ' titulo ' , ' cadastro '  )

@seção ( ' conteúdo ' )
< classe div  = " contêiner " >
    < form  action = " {{ route ( ' pet.store ' ) } } "  método = " POST " >
        @csrf
        < label  for = " nome " >Nome animal </ label >
        < tipo de entrada  = " texto " nome = " nome  " > </ input >
<br>         _ _
        < label  for = " idade " >idade</ label >
        < input  type = " text "  name = " idade " ></ input >
        <br>         _ _
        < label  for = " email" >email</ label >
        < input  type = " text "  name = " email " ></ input >
<br>         _ _
        < label  for = " contato " >contato</ label >
        < tipo de entrada  = " tel " nome = " contato " ></  input >
        < tipo de botão  = " enviar " value = " Enviar " >cadastrar</  button >
    </ formulário >
</ div >
@endsection