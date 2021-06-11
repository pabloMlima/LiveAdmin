<div>
    <input type="text" wire:model="name"/>
    <input type="text" wire:model="email"/>
    <input type="text" wire:model="password"/>

    @if($acao == 'cadastrar')
        <button wire:click="store()">Adicionar</button>
    @else
        <button wire:click="update()">Atualizar</button>
    @endif
    <h3>Ola</h3>
    @foreach($lista AS $usuario)
    <li>
        {{$usuario->name}}
        <button wire:click="delete({{$usuario->id}})">Delete</button>
        <button wire:click="edit({{$usuario->id}})">Editar</button>
        </li>
    @endforeach
</div>
