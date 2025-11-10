<?php

namespace App\Livewire\User;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public function mount(){
        if(!Auth::guard('web')->check()){
            session()->flash('error', 'Unauthorized access. Please login to access Dashboard page');
            return redirect()->route('login');
        }
    }
    public function render()
    {
        return view('livewire.user.dashboard');
    }
}
