<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserResetPassword extends Component
{
    public $user;
    
    public function resetPassword()
    {
        $this->user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        $this->user->save();
        session()->flash('success', 'Contraseña reiniciada!');
    }

    public function mount($user)
    {
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.user-reset-password');
    }
}
