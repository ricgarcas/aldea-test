<?php

namespace App\Livewire\Expense\Edit;

use App\Models\Expense;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Page extends Component
{
    public Expense $expense;

    public array $categories;

    #[Validate('required')]
    public $description;

    #[Validate('required|numeric')]
    public $amount;

    #[Validate('required')]
    public $category;

    #[Validate('required|date')]
    public $date;

    public function save()
    {
        $this->validate();

        $this->expense->update([
            'description' => $this->description,
            'amount' => $this->amount,
            'category' => $this->category,
            'date' => $this->date,
        ]);

        return redirect('/expenses');
    }

    public function mount(Expense $expense): void
    {
        $this->expense = $expense;

        $this->fill([
            'description' => $expense->description,
            'amount' => $expense->amount,
            'category' => $expense->category,
            'date' => $expense->date->format('Y-m-d'),
        ]);

        $this->categories = Expense::$categories;
    }

    public function render()
    {
        return view('livewire.expense.edit.page');
    }
}
