@extends('layouts.admin.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
               Novo perfil
            </h6>
        </div>
    </div>

    <div class="card-body">
        @livewire('role.create')
    </div>
</div>
@endsection
