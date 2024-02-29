<?php /** @noinspection PhpMissingReturnTypeInspection */

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Register extends Component
{
    #[Validate('required')]
    public $name;

    #[Validate('required|email')]
    public $email;

    #[Validate('required|min:8')]
    public $password;

    public function register()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        auth()->login($user);

        return redirect('/dashboard');
    }

    #[Layout('components.layouts.plain')]
    public function render()
    {
        return view('livewire.auth.register');
    }
}
