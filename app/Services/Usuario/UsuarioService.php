<?php
namespace App\Services\Usuario;

use App\Repositories\Contracts\UsuarioInterface;
use Carbon\Carbon;

class UsuarioService{

    public function __construct(
        UsuarioInterface $usuarioInterface
        ){
        $this->usuarioInterface = $usuarioInterface;

    }

    public function getAll()
    {
        return $this->usuarioInterface->getAll();
    }

    public function store($request)
    {
        return $this->usuarioInterface->create($request);
    }
    public function getById($id)
    {
        return $this->usuarioInterface->getById($id);
    }
    public function delete($id)
    {
        return $this->usuarioInterface->delete($id);
    }
    public function update($id, $atributtes)
    {
        return $this->usuarioInterface->update($id, $atributtes);
    }
}

?>
