<div>
    <div class="overflow-hidden">
        <div class="overflow-x-auto">
            <table class="table table-index w-full">
                <thead>
                    <tr>
                        <th class="w-9">
                        </th>
                        <th class="w-28">
                            #
                        </th>
                        <th>
                            Permissão
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($permissions as $permission)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $permission->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $permission->id }}
                            </td>
                            <td>
                                {{ $permission->name }}
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    <a class="btn btn-sm btn-info mr-2" href="">
                                        Visualizar
                                    </a>
                                    <a class="btn btn-sm btn-success mr-2" href="">
                                        Editar
                                    </a>
                                    <button class="btn btn-sm btn-rose mr-2" type="button" wire:loading.attr="disabled">
                                        Deletar
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@push('scripts')

@endpush
