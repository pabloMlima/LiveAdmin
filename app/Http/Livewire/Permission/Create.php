<?php

namespace App\Http\Livewire\Permission;

use App\Services\Permission\PermissionService;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $slug;
    public $permissions;
    protected $rules = [
        'name' => 'required|max:45|unique:permissions',
        'slug' => 'required|max:45|unique:permissions',
    ];
    protected $messages = [
        'name.max' => 'Número maximo de caracteres atingido',
        'name.unique' => 'Essa permissão ja foi cadastrada!',
        'name.required' => 'Campo nome é obrigatorio',
        'slug.required' => 'Campo descrição é obrigatorio',
        'slug.max' => 'Maximo é de 45 caracteres',
        'slug.unique' => 'Descrição ja foi cadastrada',
    ];

    protected PermissionService $permissionService;

    public function mount(permissionService $permissionService)
    {
        $this->permissionService = $permissionService;
    }

    public function render()
    {

        return view('livewire.permission.create');
    }

    public function submit(permissionService $permissionService)
    {
        $this->validate();
        $data = [
            'name' => $this->name,
            'slug' => $this->slug
        ];

        if($permissionService->create($data) > 0){
            session()->flash('variant', 'green');
            session()->flash('message', 'Permissão cadastrada com sucesso');
        }else{

        }

        //return redirect()->route('admin.permission.index');
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);

    }

}
