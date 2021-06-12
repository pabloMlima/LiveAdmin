
<div class="row justify-center	mt-40 flex flex-wrap content-center">
    <div class="col-4">
        <div class="card">
            <div class="card-body my-8">

                <form wire:submit.prevent="save">
                    <div class="form-group">
                        <label >Email </label>
                        <input type="email" class="form-control" wire:model.lazy="email" placeholder="Informe o email">
                         @error("email")
                            <small class="form-text text-red-600 ">
                                {{$message}}
                            </small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label >Senha</label>
                        <input type="password" class="form-control" wire:model.lazy="password" placeholder="Informe sua senha">
                         @error("password")
                            <small class="form-text  text-red-600">
                                {{$message}}
                            </small>
                        @enderror
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>
