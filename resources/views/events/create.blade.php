@extends('layout.main')

@section(
    'title', 
    'Criar Eventos'
    )

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Registre o usuario</h1>
    <form action="/events" method="get">
    <div class="form-group">
        <label for="title">Usuario:</label>
        <input type="text" class="form-control" id="usuario" name="nome" placeholder="Nome do usuario">
    </div>
    <div class="form-group">
        <label for="title">Telefone:</label>
        <input type="string" class="form-control" id="telefone" name="telefone" placeholder="telefone do usuario">
    </div>
    <div class="form-group">
        <label for="title">Email:</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="email do usuario">
    </div>
    <div class="form-group">
        <label for="title">Imagem:</label>
        <input type="file" class="form-control" id="imagem" name="imagem" placeholder="imagem do usuario">
    </div>
    @csrf
     <input type="submit" class="btn btm-primary" name="_method" value="Registrar usuario">
    </form>
</div>

@endsection


