<div>
    <button wire:navigate href="/customers/create" class="btn btn-success btn-sm">Create</button>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($customers as $customer)
      <tr>
        <th scope="row">{{$customer->id}}</th>
        <td>{{$customer->name}}</td>
        <td>{{$customer->email}}</td>
        <td>{{$customer->phone}}</td>
        <td>
            <button wire:navigate href="/customers/{{$customer->id}}"  class="btn btn-primary btn-sm">view</button>
            <button wire:navigate href="/customers/{{$customer->id}}/edit"class="btn btn-secondary btn-sm">edit</button>
            <button wire:click="deletecustomer({{$customer->id}})" class="btn btn-danger btn-sm">delete</button>

        </td>

      </tr>
      <tr>
        @endforeach
    </tbody>
</table>
</div>
