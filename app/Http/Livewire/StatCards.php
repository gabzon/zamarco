<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use Livewire\Component;

class StatCards extends Component
{
    public $company;
    
    public $usd30In;
    public $usd30Out;
    public $usd30Total;
    
    public $usd15In;
    public $usd15Out;
    public $usd15Total;
    
    public $usd7In;
    public $usd7Out;
    public $usd7Total;
    
    public $usdTodayIn;
    public $usdTodayOut;
    public $usdTodayTotal;
    
    public $eur30In;
    public $eur30Out;
    public $eur30Total;
    
    public $eur15In;
    public $eur15Out;
    public $eur15Total;
    
    public $eur7In;
    public $eur7Out;
    public $eur7Total;
    
    public $eurTodayIn;
    public $eurTodayOut;
    public $eurTodayTotal;
    
    // public $eur7;
    // public $eurToday;

    public function mount($company = null)
    {
        $this->usd30In = floatval(Transaction::getTotalAmount('usd','in', $company, 30));
        $this->usd30Out = floatval(Transaction::getTotalAmount('usd','out', $company, 30));    
        $this->usd30Total = $this->usd30In - $this->usd30Out;   
        
        $this->usd15In = floatval(Transaction::getTotalAmount('usd','in', $company, 15));
        $this->usd15Out = floatval(Transaction::getTotalAmount('usd','out', $company, 15));    
        $this->usd15Total = $this->usd15In - $this->usd15Out;  
        
        $this->usd7In = floatval(Transaction::getTotalAmount('usd','in', $company, 7));
        $this->usd7Out = floatval(Transaction::getTotalAmount('usd','out', $company, 7));    
        $this->usd7Total = $this->usd7In - $this->usd7Out;  

        $this->usdTodayIn = floatval(Transaction::getTotalAmount('usd','in', $company, 1));
        $this->usdTodayOut = floatval(Transaction::getTotalAmount('usd','out', $company, 1));    
        $this->usdTodayTotal = $this->usdTodayIn - $this->usdTodayOut;  

        $this->eur30In = floatval(Transaction::getTotalAmount('eur','in', $company, 15));
        $this->eur30Out = floatval(Transaction::getTotalAmount('eur','out', $company, 30));    
        $this->eur30Total = $this->eur30In - $this->eur30Out;  

        $this->eur15In = floatval(Transaction::getTotalAmount('eur','in', $company, 15));
        $this->eur15Out = floatval(Transaction::getTotalAmount('eur','out', $company, 15));    
        $this->eur15Total = $this->eur15In - $this->eur15Out;  

        $this->eur7In = floatval(Transaction::getTotalAmount('eur','in', $company, 7));
        $this->eur7Out = floatval(Transaction::getTotalAmount('eur','out', $company, 7));    
        $this->eur7Total = $this->eur7In - $this->eur7Out;  

        $this->eurTodayIn = floatval(Transaction::getTotalAmount('eur','in', $company, 1));
        $this->eurTodayOut = floatval(Transaction::getTotalAmount('eur','out', $company, 1));    
        $this->eurTodayTotal = $this->eurTodayIn - $this->eurTodayOut;  
    }

    

    public function render()
    {
        return view('livewire.stat-cards');
    }
}
