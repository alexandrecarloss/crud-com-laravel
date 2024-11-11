@extends('templates.template')

@section('content')
<h1 class="text-center">Visualizar</h1>
<hr>
<div class="col-8 m-auto">
    <p>Título: {{ $book->title }}</p>
    <p>Páginas: {{ $book->pages }}</p>
    <p>Preço: R${{ $book->price }}</p>
    <p>Autor: {{ $book->relUsers->name }}</p>
    <p>E-mail do autor: {{ $book->relUsers->email }}</p>
    <form action="{{ route('books.destroy', $book) }}" method="post" class="formDestroy" id="formDestroy">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="button" onclick="showConfirmModal()">Deletar</button>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>
@endsection