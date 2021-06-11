<?php

namespace App\Repositories\Eloquent;
use App\Repositories\Contracts\UsuarioInterface;
use App\Models\Usuario;

class UsuarioEloquent implements UsuarioInterface{

    private $model;

    public function __construct(Usuario $model){
        $this->model = $model;
    }

    public function getAll(){
        return $this->model->all();
    }

    public function getById($id){
        return $this->model->find($id);
    }

    public function create(array $attributes){
        try {
            return $this->model->create($attributes)->id;
        } catch (Exception $e){
            return [];
        }

    }

    public function update($id, array $attributes){
        $versao = $this->model->findOrFail($id);
        $versao->update($attributes);

        return $versao;
    }

    public function delete($id){
        return $this->model->findOrFail($id)->delete();

    }
}

?>
