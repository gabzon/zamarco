<?php

namespace App\Imports;

use App\Models\Transaction;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TransactionImport implements ToModel, WithHeadingRow
{
    public $cid;

    public function __construct($cid = null)
    {
        $this->cid = $cid;
    }    

    public function model(array $row)
    {
        // dd($row);
        return new Transaction([            
            'date'          => Carbon::parse($row['date'])->format('Y-m-d H:i:s') ?? now(),
            'invoice'       => $row['invoice'],
            'description'   => $row['description'],
            'credit'        => $row['credit'],
            'debit'         => $row['debit'],
            'exchange'      => $row['exchange'] ?? 0,
            'currency'      => $row['currency'],
            'type'          => $row['type'] ? strtolower($row['type']) : 'in',
            'source'        => $row['source'] ? strtolower($row['source']) :'cash',
            'user_id'       => auth()->user()->id,
            'company_id'    => $row['company'] ?? $this->cid,
        ]);
    }
}