<form wire:submit.prevent="submit" class="pt-3" >

    <div class="form-group">
        <label class="col-form-label" for="inputError">
        <i class="@error("name") far fa-times-circle text-red-500 @enderror"></i> Nome</label>
        <input  type="text" class="form-control @error("name") is-invalid @enderror" wire:model.lazy="name" >
        @error("name")
            <small class="form-text text-red-600 ">
                {{$message}}
            </small>
        @enderror
    </div>

     <div class="form-group">
        <label class="col-form-label" for="inputError">
        <i class="@error("slug") far fa-times-circle text-red-500 @enderror"></i> Descrição</label>
        <input type="text" class="form-control @error("slug") is-invalid @enderror" wire:model.lazy="slug" >
        @error("slug")
            <small class="form-text text-red-600 ">
                {{$message}}
            </small>
        @enderror
    </div>

    <div class="float-right">
        <button type="submit" class="btn btn-success">Salvar</button>
    </div>
</form>

