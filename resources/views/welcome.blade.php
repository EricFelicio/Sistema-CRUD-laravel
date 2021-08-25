@extends('layout.main')

@section(
    'title', 
    'Cadastro Agenda'
    )

@section('content')

    <div id="search-container" class="col-md-12">
    <h1>Busque um usuario</h1>
    <form class="form-welcome" action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar por (NOME)">
        <input type="submit" class="btn btn-primary" value="Pesquisar">
    </form>
</div>
    @if($search)
    <h2>Buscando por: {{ $search }}</h2>
    @else
    @endif
        <div class="card col-md-6">
        @foreach($events as $event)
            <div class="card col-md-3">
            <div class="card-head">
                <div class="card-image"><img src="/img/events/{{ $event->image }}" alt="{{ $event->nome }}"></div>
            </div>
            <div class="card-body">
                <div class="card-nome"><p>Nome: {{ $event->nome }}</p></div>
                <div class="card-telefone"><p>Telefone: {{ $event->telefone }}</p></div>
                <div class="card-email"><p>Email: {{ $event->email }}</p></div>
            </div>
            </div>
        @endforeach
        </div>

    @if(count($events) == 0 && $search)
        <p>Não foi possível encontrar nenhum usuario com {{ $search }}! <a href="/">Ver todos</a></p>
    @elseif(count($events) == 0)
        <p>Não há usuarios cadastrados</p>
    @endif
</div>

@endsection


