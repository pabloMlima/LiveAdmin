<?php
namespace App\Repositories\Contracts;

interface UsuarioInterface
{

    public function getAll(array $columns = ['*'], array $relations = ['']);

    public function getById($id, array $columns = ['*']);

    public function create(array $attributes);

    public function update($id, array $attributes);

    public function delete($id);

    public function getBy(
        array $columns = ['*'],
        array $conditions = [],
        array $conditionsIn = []);
}
