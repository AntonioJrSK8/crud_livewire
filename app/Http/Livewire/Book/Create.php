<?php

namespace App\Http\Livewire\Book;

use Livewire\Component;
use App\Models\Book;

class Create extends Component
{
    public Book $book;

    protected $rules = [
        'book.name' => 'required|string',
        'book.pages' => 'required|integer',
        'book.author' => 'required|string',
        'book.email' => '',
        'book.status' => 'required|integer'
    ];

    public function mount()
    {
        $this->book = new Book();
    }


    // public function updating($name, $value)
    // {
    //     if($name == "book.name") {
    //         $this->validate();
    //     }
    // }

    public function save()
    {
        
        $this->validate();

        Book::create($this->book->toArray());

        session()->flash('success', 'Registro criado com sucesso!');

        return redirect()->route('books.index');
    }

    public function render()
    {
        return view('livewire.book.create');
    }
}
