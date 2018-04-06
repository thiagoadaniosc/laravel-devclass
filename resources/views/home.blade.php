@extends('layout')

@section('portal')
    {{--  <h2> Página Inicial  </h2>  --}}
    {{--  @foreach ($users as $user)  --}}
        {{--  {{ $user->name }}  --}}
    {{--  @endforeach  --}}

    {{-- <ul>
        @foreach ($posts as $post)
    <li>{{$post->title}} - <small>{{$post->user->name}}</small></li>
        @endforeach
    </ul> --}}

  
    <h2>Home</h2>

    @component('components.alert')
        @slot('title')
            Alerta Título
        @endslot
        mensagem
    @endcomponent

@endsection