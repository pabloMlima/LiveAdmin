@extends('layouts.admin.admin')
@section('content')
<div class="card bg-white">
    <div class="card-header border-b border-blueGray-200">
        <div class="card-header-container">
            <h6 class="card-title">
                Perfil
            </h6>

            <a class="btn btn-indigo" href="{{ route('admin.roles.cadastrar') }}">
                Novo perfil
            </a>
        </div>
    </div>
    @livewire('role.index')

</div>
@endsection
