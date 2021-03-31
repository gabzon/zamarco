<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserDatagrid extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.user-datagrid', [
            'users' => User::paginate(10)
        ]);
    }
}
