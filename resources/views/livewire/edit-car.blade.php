<div class="card  ">
    <div class="card-header">
      Update
    </div>
    <div class="card-body">
        <form wire:submit="update">
            <div class="mb-3">
                <label for="name" class="form-label">Brand</label>
                <input wire:model="brand" type="text" class="form-control" id="name" aria-describedby="emailHelp">
                <div>
                    @error('brand')
                        <span class="text-danger"> {{$message}} </span>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Model</label>
              <input wire:model="model" type="text" class="form-control" id="exampleInputPassword1">
              <div>
                @error('model')
                    <span class="text-danger"> {{$message}} </span>
                @enderror
            </div>
            </div>

            <button  type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>
