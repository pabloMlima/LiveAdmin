<?php
namespace App\Services\Permission;

use App\Repositories\Contracts\PermissionInterface;
use Carbon\Carbon;

class PermissionService{

    public function __construct(
        PermissionInterface $permissionInterface
        ){
        $this->permissionInterface = $permissionInterface;

    }

    public function validate($request)
    {
        $conditions[0] = [
            'column' => 'name',
            'operator' => '=',
            'value' => $request->name
        ];
        return $this->permissionInterface->getBy(['*'], $conditions);
    }
    public function create($attributes){
        return $this->permissionInterface->create($attributes);
    }

    public function getAll(array $columns = ['*'], array $relations = ['']){
        return $this->permissionInterface->getAll($columns = ['*'], $relations = ['']);
    }


}

?>
