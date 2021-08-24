@extends('layout.main')

@section(
    'title', 
    'Criar Eventos'
    )

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Registre o usuario</h1>

    <form action="" method="post" action="{{ route('form.store') }}">

<!-- CROSS  -->
@csrf
<div class="form-group">
    <label>Nome</label>
    <input type="string" class="form-control" name="nome" id="nome">
</div>

<div class="form-group">
    <label>Telefone</label>
    <input type="string" class="form-control" name="telefone" id="telefone">
</div>

<div class="form-group">
    <label>Email</label>
    <input type="string" class="form-control" name="email" id="email">
</div>

<div class="form-group">
    <label>Imagem</label>
    <input type="file" class="form-control" name="imagem" id="imagem">
</div>

<input type="submit" name="send" value="Enviar" class="btn btn-dark btn-block">
</form>

</div>

@endsection


