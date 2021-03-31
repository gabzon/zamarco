<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class TransactionForm extends Component
{
    public $action;
    public $transaction;
    public $type;
    public $date;
    public $amount;
    public $exchange;
    public $currency = '';
    public $description;
    public $invoice;
    public $contact;
    public $company = '';
    public $dolarToday;
    public $contact_id;
    public $clientType;    

    public function add()
    {        
        $this->validate([
            'type'          => 'required',            
            'date'          => 'date',
            'amount'        => 'required|numeric|min:0',
            'exchange'      => 'required|numeric|min:0',
            'currency'      => 'required',
            'company'       => 'required',     
            'clientType'    => 'required',       
        ]);

        $t = Transaction::create([
            'date'          => $this->date,
            'contact'       => $this->contact,
            'contact_id'    => $this->contact_id,
            'description'   => $this->description,
            'amount'        => $this->amount,
            'exchange'      => $this->exchange,
            'currency'      => $this->currency,
            'invoice'       => $this->invoice,
            'type'          => $this->type,
            'type_of_client'=> $this->clientType,
            'company_id'    => $this->company,
            'user_id'       => Auth::user()->id,
        ]);                   
        
        session()->flash('success', 'Transaccion agregada con exito!');
        
        return redirect()->route('transaction.index');
    }

    public function edit()
    {
        $this->transaction->update([
            'date'          => $this->date,
            'contact'       => $this->contact,
            'contact_id'    => $this->contact_id,
            'description'   => $this->description,
            'amount'        => $this->amount,
            'exchange'      => $this->exchange,
            'currency'      => $this->currency,
            'invoice'       => $this->invoice,
            'type'          => $this->type,
            'type_of_client'=> $this->clientType,
            'company_id'    => $this->company,
        ]);

        
        session()->flash('success', 'Transaccion actualizada con exito!');
        
        return redirect(route('transaction.index'));
    }

    public function mount($transaction = null, $action = 'add')
    {
        $this->action = $action;

        $reponse = Http::get('https://s3.amazonaws.com/dolartoday/data.json');        
        
        // $this->dolarToday = $reponse->json()['USD']['transferencia'];
        if ($action == 'edit') {
            $this->transaction  = $transaction;
            $this->date         = $transaction->date;
            $this->contact      = $transaction->contact;
            $this->contact_id   = $transaction->contact_id;
            $this->description  = $transaction->description;
            $this->amount       = $transaction->amount;
            $this->exchange     = $transaction->exchange;
            $this->currency     = $transaction->currency;
            $this->invoice      = $transaction->invoice;
            $this->type         = $transaction->type;   
            $this->clientType   = $transaction->type_of_client;   
            $this->company      = $transaction->company_id;          
        }
    }

    public function render()
    {
        return view('livewire.transaction-form');
    }
}



