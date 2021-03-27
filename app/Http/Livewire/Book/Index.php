<?php

namespace App\Http\Livewire\Book;

use Livewire\Component;
use App\Models\Book;

class Index extends Component
{
    public $books;
    
    public function mount()
    {
        $this->books = Book::all();
    }
    
    public function render()
    {  

        return view('livewire.book.index',[
            'books' => $this->books
        ]);
    }
}
