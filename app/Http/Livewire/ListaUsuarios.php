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
    public $acao = 'cadastrar';
    public $idUsuario;

    public function render(UsuarioService $usuarioService)
    {
        $this->lista = $usuarioService->getAll();
        return view('livewire.lista-usuarios');
    }

    public function store(UsuarioService $usuarioService)
    {
        $request = [
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ];
        $usuarioService->store($request);
    }
    public function delete($id, UsuarioService $usuarioService)
    {
        $usuarioService->delete($id);
    }
    public function edit($id)
    {
        $this->acao = "editar";
        $this->idUsuario = $id;
    }
    public function update(UsuarioService $usuarioService){
        $request = [
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ];
        $usuarioService->update($this->idUsuario, $request);
    }
}
