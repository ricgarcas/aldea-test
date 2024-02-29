<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    #[Validate('required|email')]
    public $email;

    #[Validate('required|min:8')]
    public $password;

    public function login()
    {
        $this->validate();

        if (auth()->attempt(['email' => $this->email, 'password' => $this->password])) {
            return $this->redirect('/dashboard');
        }

        $this->addError('email', 'No hemos podido encontrar un usuario con estas credenciales.');
    }

    #[Layout('components.layouts.plain')]
    public function render()
    {
        return view('livewire.auth.login');
    }
}
