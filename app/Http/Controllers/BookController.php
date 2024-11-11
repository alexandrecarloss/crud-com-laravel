<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;

class BookController extends Controller
{
    private $objUser;
    private $objBook;

    public function __construct() {
        $this->objUser = new User;
        $this->objBook = new Book;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = $this->objBook->paginate(3);
        return view('index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = $this->objUser->all();
        return view('create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookRequest $request)
    {
        $cad = $this->objBook->create([
            'title' => $request->title,
            'id_user' => $request->id_user,
            'pages' => $request->pages,
            'price' => $request->price
        ]);
        if ($cad) {
            return redirect()->route('books.index')->with('success', 'Livro adicionado com sucesso!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = $this->objBook->find($id);
        return view('show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = $this->objBook->find($id);
        $users = $this->objUser->all();
        return view('create', compact('book', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $edit = $this->objBook->find($id)->update([
            'title' => $request->title,
            'id_user' => $request->id_user,
            'pages' => $request->pages,
            'price' => $request->price
        ]);
        if ($edit) {
            return redirect()->route('books.index')->with('success', 'Livro atualizado com sucesso!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = $this->objBook->find($id)->delete();
        if ($delete) {
            return redirect()->route('books.index')->with('success', 'Livro excluído com sucesso!');
        }
    }
}
