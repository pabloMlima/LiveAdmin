<?php
namespace App\Services\Login;

use App\Repositories\Contracts\UsuarioInterface;
use Carbon\Carbon;

class LoginService{

    public function __construct(
        UsuarioInterface $usuarioInterface
        ){
        $this->usuarioInterface = $usuarioInterface;

    }

    public function validate($request)
    {
        $usuario = $this->usuarioInterface->getAll()
                                ->where('email', $request['email'])
                                ->where('password', $request['password']);
        return $usuario;
    }


}

?>
