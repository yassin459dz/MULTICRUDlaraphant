<div class="card">
    <div class="card-header">
      View Customers
    </div>
    <div class="card-body">
      <h5 class="card-title">{{$cars->brand}}</h5>
      <p class="card-text">{{$cars->model}}</p>

      <a wire:navigate href="/cars" class="btn btn-primary">Go back</a>

    </div>
  </div>
