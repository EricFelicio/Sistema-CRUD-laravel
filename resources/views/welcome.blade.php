@extends('layout.main')

@section(
    'title', 
    'Cadastro Agenda'
    )

@section('content')

@foreach($events as $event)

    <div class="col-md-19 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/event{{ $event->imagem }}" alt="{{ $event->nome }}">
            </div>
            <p class="event-city location-outline"><ion-icons>{{ $event->telefone }}</ion-icons></p>
        </div>
    </div>

    <div class="col-md-19 offset-md-1">
        <div class="row">
            <div id="info-container" class="col-md-6">
                <p>{{ $event->nome }}</p>
                <p>{{ $event->telefone }}</p>
                <p>{{ $event->email }}</p>
                <p>{{ $event->imagem }}</p>
            </div>
        </div>
    </div>
    @endforeach

@endsection


