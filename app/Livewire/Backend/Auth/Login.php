<?php

namespace App\Livewire\Backend\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email, $password, $remember;


    public function login()
    {
        $this->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            // $request->authenticate();

            if (Auth::user()->IsAdmin()) {
                return redirect(route('admin.dashboard'));
            } else {
                session()->flash('error', 'You don not have permission to this page');
            }

            // return "ok";
        } else {
            session()->flash('error', 'Email or password does not match');
        }
    }

    public function render()
    {
        return view('livewire.backend.auth.login');
    }
}
