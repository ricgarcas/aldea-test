<?php /** @noinspection PhpMissingReturnTypeInspection */

namespace App\Livewire\Expense\Import;

use App\Jobs\ImportExpensesJob;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Page extends Component
{
    use WithFileUploads;

    #[Validate('required|file|mimes:csv,xlsx,xls')]
    public $file;

    public function save()
    {
        $this->validate();

        $path = $this->file->store('expenses');

        ImportExpensesJob::dispatch($path, auth()->user());

        $this->redirect('/expenses');
    }

    public function render()
    {
        return view('livewire.expense.import.page');
    }
}
