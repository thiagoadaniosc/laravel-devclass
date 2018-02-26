@extends('layout')

@section('portal')
    
<h2> Cadastro de Produtos </h2>

<form action="/produto/store" method="post">
    {{csrf_field()}}
<input type="text" name="name">
<button type="submit" value="cadastrar">Cadastrar</button>

</form>

@endsection