<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('components.layouts.auth')]
#[Title('Login')]
class Login extends Component
{

    public function login($data)
    {
        try {
            $validation = validator($data, [
                'email' => 'required|email',
                'password' => 'required|string|min:6',
            ])->validate();
            if (Auth::guard('web')->attempt($validation)) {
                session()->flash('success', 'Welcome back! You’re logged in.');
                return redirect()->route('dashboard');
            } else {
                return response()->json(['error' => 'Invalid Credential. Please try again or contact your supoort'], 401);
            }


        } catch (ValidationException $exception) {
            return response()->json(['errors' => $exception->errors()], 422);
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
