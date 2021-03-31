<?php

namespace App\Imports;

use App\Models\Transaction;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TransactionImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row);
        return new Transaction([            
            'date'          => Carbon::parse($row['fecha'])->format('Y-m-d H:i:s') ?? now(),
            'invoice'       => $row['servicio'],
            'description'   => $row['descripcion'],
            'amount'        => $row['amount'],            
            'exchange'      => $row['cambio'] ?? 1,   
            'currency'      => $row['currency'],
            'type'          => $row['tipo'],   
            'user_id'       => auth()->user()->id,               
            'company_id'    => $row['company'] ?? 1,               
        ]);
    }
}



