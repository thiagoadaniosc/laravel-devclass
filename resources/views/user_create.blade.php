@extends('layout')
@include('includes.errors')
@section('portal')
@include('includes.messages')
    <form action="/user/store" class="form-group" method="POST">
        {{csrf_field()}}
        <input type="text" name="name" class="form-control" placeholder="Nome">
        <input type="text" name="last_name" class="form-control" placeholder="SobreNome">
        <input type="text" name="email" class="form-control" placeholder="E-mail">
        <input type="text" name="password" class="form-control" type="password" placeholder="Senha...">
        {{$errors->first('password')}}
        <button type="submit" class="btn btn-primary float-right">Cadastrar</button>
    </form>
@endsection