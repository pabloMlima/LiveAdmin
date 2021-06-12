<?php

namespace App\Http\Livewire\Login;

use Livewire\Component;
use App\Requests\Login\LoginValida;

class Login extends Component
{

    public $email;
    public $password;
    protected $rules = [
        'email' => 'required|max:45|email:rfc,dns',
        'password' => 'required|min:6|max:45',
    ];
    protected $messages = [
        'email.max:45' => 'Número maximo de caracteres atingido',
        'email.email:rfc,dns' => 'Email invalido',
        'email.required' => 'Campo email é obrigatorio',
        'password.required' => 'Campo senha é obrigatorio',
        'password.min:6' => 'Minimo é de 6 caracteres',
        'password.max:45' => 'Maximo é de 45 caracteres',
    ];
    public function render()
    {
        return view('livewire.login.login');
    }
    public function save()
    {
        $this->validate();
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

}
