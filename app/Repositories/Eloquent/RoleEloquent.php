<?php

namespace App\Repositories\Eloquent;
use App\Repositories\Contracts\RoleInterface;
use App\Models\Role;

class RoleEloquent implements RoleInterface{

    private $model;
    protected $query;
    protected $wheres = array();
    protected $whereIns = array();

    public function __construct(Role $model){
        $this->model = $model;
    }

    public function getAll(array $columns = ['*'], array $relations = ['']){
        return $this->model->with($relations)->get($columns);
    }

    public function getById($id, array $columns = ['*']){
        $this->query = $this->model->newQuery();
        return $this->query->where('id', $id)->first($columns);
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
    public function getBy(
        array $columns = ['*'],
        array $conditions = [],
        array $conditionsIn = [])
    {
        $this->query = $this->model->newQuery();
        foreach($conditions as $where)
		{
			$this->query->where($where['column'], $where['operator'], $where['value']);

		}

		foreach($conditionsIn as $whereIn)
		{
			$this->query->whereIn($whereIn['column'], $whereIn['values']);
		}

		return $this->query->get($columns);
    }
}

?>
