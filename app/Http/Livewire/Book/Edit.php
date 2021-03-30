<?php

namespace App\Http\Livewire\Book;

use Livewire\Component;
use App\Models\Book;

class Edit extends Component
{
    public Book $book;

    protected $rules = [
        'book.name' => 'required|string',
        'book.pages' => 'required|integer',
        'book.author' => 'required|string',
        'book.email' => '',
        'book.status' => 'required|integer'
    ];

    public function mount(Book $book)
    {
        $this->book = $book;
    }

    public function save()
    {
        $this->validate();

        $this->book->update($this->book->toArray());
        
        session()->flash('success', 'Registro atualizado com sucesso!');

        return redirect()->route('books.index');
    }

    public function render()
    {
        return view('livewire.book.edit');
    }
}
