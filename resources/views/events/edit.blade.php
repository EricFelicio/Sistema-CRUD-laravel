@extends('layout.main')

@section(
    'title', 
    'Editor'
    )

@section('content')

<div id="event-create-container center-block" class="col-md-6 offset-md-3">
    <h1>Edite o usuario</h1>

    <form action="/events/edit" method="POST" enctype="multipart/form-data">

    <!-- CROSS  -->
    @csrf
    <input type="hidden" name="id" value="{{ $event['id'] }}" >
    
    <div class="form-group">
        <label>Imagem do Usuario:</label>
        <input type="file" id="image" name="image" class="from-control-file" value="{{ $event['image'] }}" >
    </div>

    <div class="form-group">
        <label>Nome</label>
        <input type="string" class="form-control" name="nome" id="nome" value="{{ $event['nome'] }}" >
    </div>

    <div class="form-group">
        <label>Telefone</label>
        <input type="string" class="form-control" name="telefone" id="telefone" value="{{ $event['telefone'] }}" >
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="string" class="form-control" name="email" id="email" value="{{ $event['email'] }}" >
    </div>

    <input type="submit" class="btn btn-primary" value="Editar Usuario">

    </form>

</div>

@endsection