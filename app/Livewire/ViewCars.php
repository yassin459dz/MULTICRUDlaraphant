<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Car;

class ViewCars extends Component
{
    public $cars=[];
    public function mount(Car $car){
        $this->cars = $car;
    }
    public function render()
    {
        return view('livewire.view-cars');
    }
}
