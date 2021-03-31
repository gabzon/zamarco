<?php

namespace App\Http\Livewire;

use App\Models\Company;
use Livewire\Component;
use Livewire\WithPagination;

class CompanyDatagrid extends Component
{
    use WithPagination;
    
    public function render()
    {
        return view('livewire.company-datagrid', ['companies'=> Company::paginate(10)]);
    }
}
