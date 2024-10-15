<?php

namespace App\Livewire;
use App\Models\Car;
use Livewire\Component;


class Cars extends Component
{
    public $cars=[];

    public function render()
    {
        return view('livewire.car');
    }
    public function mount(){
        $this->cars=Car::all();
    }
    public function deletecar(Car $car){
        $car->delete();
        session()->flash('success');
        return $this->redirect('/cars', navigate: true);
    }
}
