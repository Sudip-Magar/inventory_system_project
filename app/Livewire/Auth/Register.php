<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('components.layouts.auth')]
#[Title('Register')]
class Register extends Component
{
    use WithFileUploads;
    public $image;

    public function register($data)
    {
        try {
            try {
                $validation = validator($data, [
                    'name' => 'required|string|min:3|max:30',
                    'email' => 'required|email|unique:users,email',
                    'phone' => 'required|digits:10',
                    'address' => 'required|string|min:3|max:30',
                    'role' => 'required',
                    'image' => 'nullable|image',
                    'password' => 'required|string|min:6|confirmed',
                    'password_confirmation' => 'required|same:password',
                ])->validate();

                if ($this->image) {
                    $validation['image'] = $this->image->store('user', 'public');
                } else {
                    $validation['image'] = null;
                }
                DB::beginTransaction();
                $validation['password'] = Hash::make($validation['password']);

                User::create($validation);
                DB::commit();
                session()->flash('success', 'Registration successful. You can now log in.');
                session()->flash('success', 'Registration successful. You can now log in.');
                return redirect()->route('login');
                // return response()->json(['success' => 'Registration successful.'], 201);
            } catch (\Exception $e) {
                DB::rollBack();
                return response()->json(['error' => 'Registration failed. Please try again.' . $e->getMessage()], 500);
            }

        } catch (ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        }


    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
