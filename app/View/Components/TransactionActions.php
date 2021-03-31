<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TransactionActions extends Component
{
    public $transaction;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($t)
    {
        $this->transaction = $t;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.transaction-actions');
    }
}
