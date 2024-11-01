@extends('layouts.app')

@section('content')
<h1>Adicionar Livro</h1>
<form action="/livros" method="POST">
    @csrf
    <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" class="form-control" name="titulo" required>
    </div>
    <div class="form-group">
        <label for="autor">Autor</label>
        <input type="text" class="form-control" name="autor" required>
    </div>
    <div class="form-group">
        <label for="ano_publicacao">Ano de Publicação</label>
        <input type="number" class="form-control" name="ano_publicacao" required>
    </div>
    <div class="form-group">
        <label for="resumo">Resumo</label>
        <textarea class="form-control" name="resumo"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Adicionar</button>
</form>
@endsection
