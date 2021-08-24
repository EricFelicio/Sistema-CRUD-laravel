@extends('layout.main')

@section(
    'title', 
    'Cadastro Agenda'
    )

@section('content')

    @foreach($events as $event)
    <p>{{ $event->nome }} {{ $event->telefone }} {{ $event->email }} {{ $event->imagem }}</p>
    @endforeach
@endsection


