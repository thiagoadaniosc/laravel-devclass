@extends('layout')

@section('portal')
    {{--  <h2> Página Inicial  </h2>  --}}
    {{--  @foreach ($users as $user)  --}}
        {{--  {{ $user->name }}  --}}
    {{--  @endforeach  --}}

    <ul>
        @foreach ($posts as $post)
    <li>{{$post->title}} - <small>{{$post->user->name}}</small></li>
        @endforeach
    </ul>

@endsection