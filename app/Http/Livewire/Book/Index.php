<?php

namespace App\Http\Livewire\Book;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Book;

class Index extends Component
{
    use WithPagination;

    public $numPages = 10;
    
    public function mount()
    {
        //$this->books = Book::paginate();
    }
    
    public function render()
    {  

        return view('livewire.book.index',["books" => Book::paginate($this->numPages)]);
    }
}
