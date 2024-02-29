<?php

namespace App\Jobs;

use App\Imports\ExpensesImport;
use App\Mail\ExpensesImported;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

class ImportExpensesJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public $filePath,
        public User $user
    ) {
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // Create a new instance of the ExpensesImport class
        $import = new ExpensesImport($this->user);

        // Import the expenses from the file
        Excel::import($import, $this->filePath);

        // Get the number of rows imported
        $importRowCount = $import->getRowCount();

        // Send a notification to the user via email
        Mail::to($this->user)
            ->send(new ExpensesImported($this->user, $importRowCount));
    }
}
