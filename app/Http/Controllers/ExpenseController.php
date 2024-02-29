<?php

namespace App\Http\Controllers;

use App\Jobs\ImportExpensesJob;
use App\Models\Expense;
use Illuminate\Validation\Rule;

class ExpenseController extends Controller
{
    public function import()
    {
        $validator = validator(request()->all(), [
            'file' => 'required|file|mimes:csv,xlsx,xls'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        $path = request()->file('file')->store('expenses');

        ImportExpensesJob::dispatch($path, auth()->user());

        return response()->json([
            'message' => 'Gasto creado correctamente.'
        ], 201);
    }

    public function update(Expense $expense)
    {
        $validator = validator(request()->all(), [
            'category' => [
                'required',
                Rule::in(Expense::$categories)
            ]
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        $this->authorize('update', $expense);

        $expense->update(request()->only('category'));

        return response()->json([
            'message' => 'Gasto actualizado correctamente.',
            'expense' => $expense
        ]);
    }
}
