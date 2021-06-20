<?php

namespace App\Http\Livewire\Role;

use App\Models\Permission;
use App\Models\Role;
use App\Services\Role\RoleService;
use App\Services\Permission\PermissionService;
use Livewire\Component;

class Create extends Component
{
    public Role $role;

    public array $permissions = [];

    public array $listsForFields = [];

    public function mount(RoleService $roleService)
    {
        $this->roleService = $roleService;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.role.create');
    }

    public function submit()
    {
        $this->validate();

        $this->role->save();
        $this->role->permissions()->sync($this->permissions);

        return redirect()->route('admin.roles.index');
    }

    protected function rules(): array
    {
        return [
            'role.title' => [
                'string',
                'required',
            ],
            'permissions' => [
                'required',
                'array',
            ],
            'permissions.*.id' => [
                'integer',
                'exists:permissions,id',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['permissions'] = Permission::pluck('name', 'id')->toArray();
    }
}
