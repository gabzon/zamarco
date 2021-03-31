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
        switch ($title) {
            case '30':
                $this->title = 'Ultimos 30 dias';
                break;
            case '15':                
                $this->title = 'Ultimos 15 dias';
                break;
            case '7':
                $this->title = 'Ultimos 7 dias';
                break;
            default:
                $this->title = 'Hoy';
                break;
        }
        
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
