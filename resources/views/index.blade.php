@extends('templates.template')


<style>
    .linhaBotoes {
        display: flex;
    }
</style>

@section('content')
<h1 class="text-center">CRUD</h1>
<hr>
@if(session('success'))
    <div class="text-center mb-4 mt4 p-2">
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    </div>
@endif
<div class="text-center mt-3 mb-4">
    <a href="{{ route('books.create') }}">
        <button class="btn btn-success">Cadastrar</button>
    </a>
</div>
<div class="col-8 m-auto">
    <table class="table text-center">
    <thead class="table-dark">
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Título</th>
        <th scope="col">Autor</th>
        <th scope="col">Preço</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($books as $book)
        <tr>
            <th scope="row">{{ $book->id }}</th>
            <td>{{ $book->title }}</td>
            <td>{{ $book->relUsers->name }}</td>
            <td>{{ $book->price }}</td>
            <th class="linhaBotoes">
                <a href="{{ route('books.show', $book) }}">
                    <button><span class="material-symbols-outlined"> info </span></button>
                </a>
                <a href="{{ route('books.edit', $book) }}">
                    <button type="button"><span class="material-symbols-outlined"> edit </span></button>
                </a>
                <form action="{{ route('books.destroy', $book) }}" method="post" class="formDestroy" id="formDestroy">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="showConfirmModal()"><span class="material-symbols-outlined"> delete </span></button>
                </form>
            </th>
        </tr>
    @endforeach
</tbody>
</table>

{{ $books->links('pagination::bootstrap-5') }}

</div>
@endsection

<!-- <script>
    window.confirmDelete = function() {
        document.getElementById('formDestroy').submit();
    };
    
    window.hideConfirmModal = function() {
        const confirmModal = bootstrap.Modal.getInstance(document.getElementById('confirmModal'));
        confirmModal.hide();
    };

    window.showConfirmModal = function() {
        const confirmModal = new bootstrap.Modal(document.getElementById('confirmModal'));
            confirmModal.show();
    };
</script> -->