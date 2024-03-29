@extends('layout.main')

@section(
    'title', 
    'Cadastro'
    )

@section('content')

<div id="event-create-container center-block" class="col-md-6 offset-md-3">
    <h1>Registre o usuario</h1>

    <form action="/events" method="POST" enctype="multipart/form-data">

        <!-- CROSS  -->
        @csrf
        <div class="form-group">
            <label for="image">Imagem do Usuario:</label>
            <input type="file" id="image" name="image" class="from-control-file">
        </div>

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="string" class="form-control" name="nome" id="nome">
        </div>

        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="string" class="form-control" name="telefone" id="telefone">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="string" class="form-control" name="email" id="email">
        </div>

        <input type="submit" class="btn btn-primary" value="Criar Usuario">

    </form>

</div>

@endsection