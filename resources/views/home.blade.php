@extends('layout')

@section('portal')
    <h2> Página Inicial  </h2>
    @foreach ($users as $user)
        {{ $user->name }}
    @endforeach
@endsection