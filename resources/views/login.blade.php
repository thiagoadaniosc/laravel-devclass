@extends('layout')

@section('portal')

@include('includes.errors')

@if (session()->has('error'))
<span class="alet alert-danger text-center">{{session('error')}}</span>
@endif

<form action="/login/store" method="POST">
    {{csrf_field()}}
    <div class="form-group">
        <label for="name">E-mail</label>
        <input type="text"
        class="form-control" name="email" id="" aria-describedby="helpId" placeholder="Digite seu E-mail">
    </div>

        <div class="form-group">
          <label for="password">Senha</label>
          <input type="password" class="form-control" name="password" id="" placeholder="Digite sua senha">
        </div>

        <small id="helpId" class="form-text text-muted">Help text</small>

        <button type="submit" class="btn btn-primary">Logar</button>
    
</form>

@endsection