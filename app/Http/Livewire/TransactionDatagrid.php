<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use Livewire\Component;
use Livewire\WithPagination;

class TransactionDatagrid extends Component
{
    use WithPagination;
    
    public $company;

    public function mount($company = null)
    {        
        $this->company = $company;
    }

    public function delete($id)
    {                
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();

        session()->flash('success', 'Transaction eliminada exitosamente!');
        
        return redirect()->route('dashboard');
    }

    public function render()
    {
        
        if ($this->company == null) {            
            $empresas = auth()->user()->worksAt()->pluck('company_id')->toArray();            
            $transactions = Transaction::whereIn('company_id',$empresas)->orderBy('date', 'desc')->paginate(15);
            // $transactions = Transaction::orderBy('date', 'desc')->paginate(15);
        } else {
            $transactions = Transaction::orderBy('date', 'desc')->where('company_id', $this->company)->paginate(15);
        }

        return view('livewire.transaction-datagrid', ['transactions' => $transactions]);
    }
}
