<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;

class ViewCustomers extends Component
{
    public $customers=[];
    public function mount(Customer $customer){
        $this->customers = $customer;
    }
    public function render()
    {
        return view('livewire.view-customers');
    }
}
