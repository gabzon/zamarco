<?php

namespace App\Exports;

use App\Models\Transaction;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\Exportable;

class TransactionExport implements FromQuery, WithHeadings
{
    public int $cid;

    public function __construct(int $cid)
    {
        $this->cid = $cid;
    }

    public function query()
    {
        return Transaction::query()->where('company_id', $this->cid);
    }

    public function headings(): array
    {
        return [
            'ID',
            'date',
            'contact_id',
            'Description',
            'credit',
            'debit',
            'exchange',
            'bolivares',
            'currency',
            'contact',
            'invoice',
            'destinatary',
            'type',
            'source',
            'type_of_client',
            'user_id',
            'company_id',
            'created_at',
            'updated_at',
        ];
    }
}
