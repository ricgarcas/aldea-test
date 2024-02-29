<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class Page extends Component
{
    public $expenses;

    public $labels;

    public $data;

    public function render()
    {
        $this->expenses = auth()->user()->expenses()->latest()->get();

        // Group expenses by month, Remove duplicate months, and format the date
        $this->labels = $this->expenses->groupBy(function ($expense) {
            return $expense->date->format('M/Y');
        })->keys();

        // Group expenses by month and sum the amount
        $this->data = $this->expenses->groupBy(function ($expense) {
            return $expense->date->format('M/Y');
        })->map(function ($expenses) {
            return $expenses->sum('amount');
        });

        return view('livewire.dashboard.page');
    }
}
