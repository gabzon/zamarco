<?php

namespace App\Exports;

use App\Models\Transaction;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class TransactionExport implements FromQuery, WithHeadings, WithMapping
{
    public int $cid;

    public function __construct(int $cid)
    {
        $this->cid = $cid;
    }

    public function query()
    {
        return Transaction::query()->where('company_id', $this->cid)->latest();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Fecha',
            'Divisa',
            'Tipo',
            'Credito',
            'Debito',
            'Factura',
            'Cash/Banco',
            'Tipo de cliente',
            'Cliente',
            'ID/RIF/Cedula',
            'Cambio',
            'Bolivares',
            'destinatario',
            'Empresa',
            'Autor de la transaccion',
            'Fecha de creacion',
            'Ultima modification',
            'Descripcion',
        ];
    }

    public function map($transaction): array
    {
        return [
            $transaction->id,
            $transaction->date->format('Y-m-d'),
            $transaction->currency,
            $transaction->type,
            $transaction->credit,
            $transaction->debit,
            $transaction->invoice, 
            $transaction->source,           
            $transaction->type_of_client,
            $transaction->contact,
            $transaction->contact_id,            
            $transaction->exchange,
            $transaction->bolivares,            
            $transaction->destinatary,            
            $transaction->company->name,            
            $transaction->author->name,  
            $transaction->created_at->format('Y-m-d'),          
            $transaction->updated_at->format('Y-m-d'),  
            $transaction->description,
        ];
    }
}
