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
        //
    }

    public function destroy($id)
    {
        Book::whereId($id)->first()->delete();
        
        //usado quando o banco é pequeno 
        $this->book = Book::all();

        //usado quando o banco de dados é grande
        // $this->book = $this->book->filter(function($item) use ($id) {

        //     return $item->id != $id;

        // });

        session()->flash('delete', 'Registro excluido com sucesso!');
    }
    
    public function render()
    {  

        return view('livewire.book.index',["books" => Book::paginate($this->numPages)]);
    }
}
