@extends('templates.template')

@section('content')
<h1 class="text-center">@if(isset($book)) Editar @else Cadastrar @endif</h1>
<hr>
<div class="col-8 m-auto">
    @if(isset($errors) && count($errors) > 0)
        <div class="text-center mb-4 mt4 p-2">
            @foreach($errors->all() as $erro)
            <div class="alert alert-danger" role="alert">
                {{ $erro }}
            </div>
            @endforeach
        </div>
    @endif
    @if(isset($book)) 
    <form action="{{ route('books.update', $book) }}" method="post" class="formEdit" id="formEdit">
        @method('PUT')
    @else 
    <form action="{{ route('books.store') }}" method="post" class="formCad" id="formCad">
    @endif
        @csrf
        <div class="form-group">
            <label for="title">Título:</label>
            <input type="text" class="form-control" id="title" name="title" required maxlength="191" value="{{ $book->title ?? '' }}">
        </div>
        <div class="form-group">
            <label for="id_user">Autor:</label>
            <select class="form-select" name="id_user" id="id_user" required>
                <option value="{{ $book->relUsers->id ?? '' }}" selected>{{ $book->relUsers->name ?? 'Selecione' }}</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="pages">Páginas:</label>
            <input type="number" class="form-control" id="pages" name="pages" required value="{{ $book->pages ?? '' }}">
        </div>
        <div class="form-group">
            <label for="price">Preço:</label>
            <input type="number" placeholder="00.00" step="0.01" class="form-control" id="price" name="price" required value="{{ $book->price ?? '' }}">
        </div>
        <button type="submit" class="btn btn-primary">@if(isset($book)) Editar @else Cadastrar @endif</button>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection