@extends('layout.main')

@section(
    'title', 
    'Criar Eventos'
    )

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Registre o usuario</h1>
    <form action="/events" method="get" enctype="multipart/form-data">
    <div class="form-group">
    <label for="title">Imagem:</label>
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        <div class="custom-file">
        <input type="file" class="custom-file-input" name="image" id="input_img_itens">
        <label class="custom-file-label" for="input_img_itens">Escolha a imagem</label>
    </div>
</div>
    </div>
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
    @csrf
     <input type="submit" class="btn btn-primary" name="_method" value="Registrar usuario">
    </form>
</div>

@endsection


