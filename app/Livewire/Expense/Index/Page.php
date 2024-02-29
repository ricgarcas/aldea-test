<?php

namespace App\Livewire\Expense\Index;

use Livewire\Component;

class Page extends Component
{
    public $expenses;

    public function mount()
    {
        $this->expenses = auth()->user()->expenses()->latest()->get();
    }

    public function render()
    {
        return view('livewire.expense.index.page');
    }
}
