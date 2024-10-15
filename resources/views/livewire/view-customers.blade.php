<div class="card">
    <div class="card-header">
      View Customers
    </div>
    <div class="card-body">
      <h5 class="card-title">{{$customers->name}}</h5>
      <p class="card-text">{{$customers->email}}</p>
      <p class="card-text">{{$customers->phone}}</p>

      <a wire:navigate href="/customers" class="btn btn-primary">Go back</a>

    </div>
  </div>
