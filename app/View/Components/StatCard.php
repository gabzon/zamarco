<?php

namespace App\View\Components;

use Illuminate\View\Component;

class StatCard extends Component
{
    public $title;
    public $porcentage;
    public $currency;    
    public $income;
    public $expenses;
    public $total;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $porcentage, $currency, $income, $expenses, $total)
    {
        $this->title = $title;
        $this->porcentage = $porcentage;        
        $this->currency = $currency;
        $this->income = $income;
        $this->expenses = $expenses;
        $this->total = $total;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.stat-card');
    }
}
