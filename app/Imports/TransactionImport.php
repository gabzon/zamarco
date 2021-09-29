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
            'debit'         => abs($row['debit']),
            'bolivares'     => $this->amount($row['bolivares']),
            'exchange'      => $this->amount($row['exchange']),
            'currency'      => $row['currency'],
            'type'          => $row['type'] ? strtolower($row['type']) : 'in',
            'source'        => $this->source(strtolower($row['source'])),
            'user_id'       => auth()->user()->id,
            'destinatary'   => $row['destinatary'] ?? '',
            'company_id'    => $row['company'] ?? $this->cid,
        ]);
    }

    public function source($source)
    {
        if ($source) {
            if ($source == 'caja') {
                return 'cash';
            } elseif (($source == 'banco') || ($source == 'bank')) {
                return 'bank';
            }
        } else {
            return 'cash';
        }                
    }
    
    public function amount($amount)
    {
        if ($amount === '') {            
            return $amount;
        } else {
            return 0.00;
        }        
    }
}