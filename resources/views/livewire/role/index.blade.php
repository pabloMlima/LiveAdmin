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
                           Perfil
                        </th>
                        <th>
                            Permissões
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($roles as $role)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $role->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $role->id }}
                            </td>
                            <td>
                                {{ $role->name }}
                            </td>
                            <td>
                                @foreach($role->permissions as $key => $entry)
                                    <span class="badge badge-relationship">{{ $entry->name }}</span>
                                @endforeach
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('role_show')
                                        <a class="btn btn-sm btn-info mr-2" href="">
                                        </a>
                                    @endcan
                                    @can('role_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="">
                                        </a>
                                    @endcan
                                    @can('role_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:loading.attr="disabled">
                                        </button>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10">No entries found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@push('scripts')

@endpush
