@extends('layout')
@include('includes.errors')
@section('portal')
@include('includes.messages')
    <form action="/user/store" method="POST">
        {{csrf_field()}}
        <input type="text" name="name" placeholder="Nome">
        <input type="text" name="last_name" placeholder="SobreNome">
        <input type="text" name="email" placeholder="E-mail">
        <input type="text" name="password" type="password" placeholder="Senha...">
        {{$errors->first('password')}}
        <button type="submit">Cadastrar</button>
    </form>
@endsection