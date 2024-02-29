<?php

namespace App\Imports;

use App\Models\Expense;
use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class ExpensesImport implements ToModel, WithHeadingRow
{
    protected int $rows = 0;

    public function __construct(
        public User $user
    ) {
    }

    /**
     * @param  array  $row
     *
     * @return Expense
     */
    public function model(array $row): Expense
    {
        ++$this->rows; // Increment the row count

        return new Expense([
            'description' => $row['gasto'],
            'amount' => $row['monto'],
            'date' => $this->transformDate($row['fecha']),
            'user_id' => $this->user->id,
        ]);
    }

    protected function transformDate($value): string
    {
        return Date::excelToDateTimeObject($value)->format('Y-m-d');
    }

    public function getRowCount(): int
    {
        return $this->rows;
    }
}
