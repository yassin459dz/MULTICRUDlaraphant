<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Car;
class CreateCar extends Component
{
    public $brand='';//for link with html text input
    public $model='';//for link with html text input
    public function render()
    {
        return view('livewire.create-car');
    }

    public function savecar(){
        $validated=$this->validate([
            'brand'=>'required|max:255',
            'model'=>'required|max:255',

        ]);
        Car::create($validated);
        $this->reset();
        return $this->redirect('/cars', navigate: true);

    }
}
