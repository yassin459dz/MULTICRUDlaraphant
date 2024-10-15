<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Car;

class EditCar extends Component
{
        /** @var Car */

    public $car;
    public $brand;
    public $model;

    public function mount(Car $car)
    {
        $this->car =$car;
        $this->brand=$car->brand;
        $this->model=$car->model;//this is not a problem vscode fuck with me
    }

    public function render()
    {
        return view('livewire.edit-car');
    }

    public function update()
    {
        $validated = $this->validate([
            'brand' => 'required|max:255',
            'model' => 'required|max:255',
        ]);

        // Update the car record using the validated data
        $this->car->update($validated);

        // Flash success message
        session()->flash('success', 'Car updated successfully!');

        // Redirect to the cars listing page
        return $this->redirect('/cars', navigate: true);
    }
}
