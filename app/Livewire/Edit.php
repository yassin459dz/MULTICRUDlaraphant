<?php

namespace App\Livewire;
use App\Models\Customer;
use Livewire\Component;

class Edit extends Component
{
    public $customer;
    public $name;
    public $email;
    public $phone;
    public function mount(Customer $customer){
        $this->customer=$customer;
        $this->name=$customer->name;
        $this->email=$customer->email;
        $this->phone=$customer->phone;
    }

    public function render()
    {
        return view('livewire.edit');
    }

    public function update()
    {
        $validated=$this->validate([
            'name'=>'required|max:255',
            'email'=>'required|email|max:255',
            'phone'=>'required||max:255',

        ]);
        $this->customer->update($validated);
        session()->flash('success');
        return $this->redirect('/customers', navigate: true);


    }
}
