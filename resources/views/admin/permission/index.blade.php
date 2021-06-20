@extends('layouts.admin.admin')
@section('content')
<div class="card bg-white">
    <div class="card-header border-b border-blueGray-200">
        <div class="card-header-container">
            <h6 class="card-title">
                Lista de permissões
            </h6>

                <a class="btn btn-indigo" href="">
                    Nova permissão
                </a>
        </div>
    </div>
    @livewire('permission.index')

</div>
@endsection
