<?php
namespace App\Services\Role;

use App\Repositories\Contracts\RoleInterface;
use Carbon\Carbon;

class RoleService{

    public function __construct(
        RoleInterface $roleInterface
        ){
        $this->roleInterface = $roleInterface;

    }

    public function create($attributes){
        return $this->roleInterface->create($attributes);
    }

    public function getAll(array $columns = ['*']){
        return $this->roleInterface->getAll($columns);
    }


}

?>
