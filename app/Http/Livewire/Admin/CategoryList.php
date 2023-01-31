<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;

class CategoryList extends Component
{
    public function render()
    {
        return view('livewire.admin.category-list', [
            'categories' => Category::all(),
        ])->layout('layouts.admin');
    }
}
