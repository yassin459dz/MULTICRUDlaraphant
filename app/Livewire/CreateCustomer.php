<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;
class CreateCustomer extends Component
{
    public $name='';//for link with html text input
    public $email='';//for link with html text input
    public $phone='';//for link with html text input

    public function render()
    {
        return view('livewire.create-customer');
    }

    public function save(){
        $validated=$this->validate([
            'name'=>'required|max:255',
            'email'=>'required|email|unique:customers|max:255',
            'phone'=>'required|unique:customers|max:255',

        ]);
        Customer::create($validated);
        $this->reset();
    }
}
