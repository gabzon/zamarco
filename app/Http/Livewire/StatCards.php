<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use Carbon\Carbon;
use Livewire\Component;

class StatCards extends Component
{
    public $company;
    
    public $sumCashInUSD;
    public $sumCashOutUSD;
    public $totalCashUSD;
    
    public $sumBankInUSD;
    public $sumBankOutUSD;
    public $totalBankUSD;

    public $sumInEur;
    public $sumOutEur;
    public $totalEur;
    
    public $transactionsByMonths;
    public $totalbyYear;
    

    public function mount($company = null)
    {
        $this->sumCashInUSD = Transaction::currency('usd')->byCompany($company)->bySource('cash')->byType('in')->sum('credit');
        $this->sumCashOutUSD = Transaction::currency('usd')->byCompany($company)->bySource('cash')->byType('out')->sum('debit');
        $this->totalCashUSD = $this->sumCashInUSD - $this->sumCashOutUSD;

        $this->sumBankInUSD = Transaction::currency('usd')->byCompany($company)->bySource('bank')->byType('in')->sum('credit');
        $this->sumBankOutUSD = Transaction::currency('usd')->byCompany($company)->bySource('bank')->byType('out')->sum('debit');
        $this->totalBankUSD = $this->sumBankInUSD - $this->sumBankOutUSD;


        $this->sumInEur = Transaction::currency('eur')->byCompany($company)->byType('in')->sum('credit');
        $this->sumOutEur = Transaction::currency('eur')->byCompany($company)->byType('out')->sum('debit');
        $this->totalEur = $this->sumInEur - $this->sumOutEur;
        
        $this->transactionsByMonths = Transaction::where('currency','usd')->where('company_id', $company)->get()->map(function($item) {
            $item->month = Carbon::parse($item->date)->month;            
            $item->year = Carbon::parse($item->date)->year;
            return $item;
        })
        ->groupBy(['year', 'month'])        
        ->map
            ->map(function($month) {
            return [$month->sum('credit'), $month->sum('debit')];
        }); 
            
        $this->totalbyYear = Transaction::where('company_id', $company)->sum('credit');
    }

    public function render()
    {
        return view('livewire.stat-cards');
    }
}
