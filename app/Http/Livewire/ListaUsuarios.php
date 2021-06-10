<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Services\Usuario\UsuarioService;

class ListaUsuarios extends Component
{

    public $name;
    public $email;
    public $password;
    public $lista;

    public function render(UsuarioService $usuarioService)
    {
        $this->lista = $usuarioService->getAll();
        return view('livewire.lista-usuarios');
    }

    public function add(UsuarioService $usuarioService)
    {
        $request = [
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ];
        $usuarioService->store($request);
    }
}
