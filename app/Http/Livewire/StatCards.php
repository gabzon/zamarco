<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use Carbon\Carbon;
use Livewire\Component;

class StatCards extends Component
{
    public $company;
    
    public $totalCashUSD;
    public $transactionsByMonths;
    public $totalbyYear;
    

    public function mount($company = null)
    {
        $sumCashInUSD = Transaction::currency('USD')->byCompany($company)->byType('in')->sum('credit');
        $sumCashOutUSD = Transaction::currency('USD')->byCompany($company)->byType('out')->sum('debit');
        $this->totalCashUSD = $sumCashInUSD - $sumCashOutUSD;
        

        $this->transactionsByMonths = Transaction::where('company_id', $company)->get()->map(function($item) {
            $item->month = Carbon::parse($item->date)->month;            
            $item->year = Carbon::parse($item->date)->year;
            return $item;
        })
        ->groupBy(['year', 'month'])        
        ->map
            ->map(function($month) {
            return [$month->where('currency','USD')->sum('credit'), $month->where('currency','USD')->sum('debit')];
        }); 
            
        $this->totalbyYear = Transaction::where('company_id', $company)->sum('credit');
    }

    public function render()
    {
        return view('livewire.stat-cards');
    }
}
