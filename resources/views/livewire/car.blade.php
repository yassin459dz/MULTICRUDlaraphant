<div>
    {{-- <button wire:navigate href="/customers/create" class="btn btn-success btn-sm">Create</button> --}}
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($cars as $car)
      <tr>
        <th scope="row">{{$car->id}}</th>
        <td>{{$car->brand}}</td>
        <td>{{$car->model}}</td>
        <td>
            <button wire:navigate href="/cars/{{$car->id}}"  class="btn btn-primary btn-sm">view</button>
            <button wire:navigate href="/cars/{{$car->id}}/edit"class="btn btn-secondary btn-sm">edit</button>
            <button wire:click="deletecar({{$car->id}})" class="btn btn-danger btn-sm">delete</button>

        </td>

      </tr>
      <tr>
        @endforeach
    </tbody>
</table>
</div>
