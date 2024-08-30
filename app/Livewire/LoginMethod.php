<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LoginMethod extends Component
{
    public $email, $password;
    public function render()
    {
        return view('livewire.login-method');
    }

    public function submit()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        try {
            if(Auth::attempt(['email' => $this->email, 'password' => $this->password], true)){
                return redirect(route('menu'));
            }else{
                dd("username atau passsword tidak valid");
            }
        } catch (\Throwable $th) {
            return dd($th->getMessage());
        }
    }
}
