<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('role.name') ? 'invalid' : '' }}">
        <label class="form-label required" for="name">Perfil</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="role.name">
        <div class="validation-message">
            {{ $errors->first('role.name') }}
        </div>
        <div class="help-block">
        </div>
    </div>
    <div class="form-group {{ $errors->has('permissions') ? 'invalid' : '' }}">
        <label class="form-label required" for="permissions">Permissões</label>
        <x-select-list class="form-control" required id="permissions" name="permissions" wire:model="permissions" :options="$this->listsForFields['permissions']" multiple />
        <div class="validation-message">
            {{ $errors->first('permissions') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.role.fields.permissions_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            Salvar
        </button>
        <a href="{{ route('admin.perfis.index') }}" class="btn btn-secondary">
            Cancelar
        </a>
    </div>
</form>
