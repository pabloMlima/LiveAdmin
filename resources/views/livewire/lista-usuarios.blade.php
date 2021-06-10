<div>
    <input type="text" wire:model="name"/>
    <input type="text" wire:model="email"/>
    <input type="text" wire:model="password"/>

    <button wire:click="add()">Adicionar</button>

    <h3>Ola</h3>
    @foreach($lista AS $usuario)
    <li>{{$usuario->name}}</li>
    @endforeach
</div>
