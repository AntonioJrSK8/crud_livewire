<?php

namespace App\Http\Livewire\Book;

use Livewire\Component;
use App\Models\Book;

class Edit extends Component
{
    
    public function render()
    {
        return view('livewire.book.edit');
    }
}
