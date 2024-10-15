<div class="card  ">
    <div class="card-header">
      Create
    </div>
    <div class="card-body">
        <form wire:submit="save">
            <div class="mb-3">
                <label for="name" class="form-label">NAME</label>
                <input wire:model="name" type="text" class="form-control" id="name" aria-describedby="emailHelp">
                <div>
                    @error('name')
                        <span class="text-danger"> {{$message}} </span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input  wire:model="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              <div>
                @error('email')
                    <span class="text-danger"> {{$message}} </span>
                @enderror
            </div>
            </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Phone N°</label>
              <input wire:model="phone" type="text" class="form-control" id="exampleInputPassword1">
              <div>
                @error('phone')
                    <span class="text-danger"> {{$message}} </span>
                @enderror
            </div>
            </div>

            <button  type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>
