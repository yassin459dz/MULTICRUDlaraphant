<?php

namespace App\Livewire;
use App\Models\Multi;
use Livewire\Component;

class MultiStep extends Component
{
    public $currentstep = 1;//vs code want to make the S with maj fuck heme
    public $totalstep = 4;//vs code want to make the S with maj fuck heme

    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $status;
    public $gender;



    public function render()
    {
        return view('livewire.multi-step');
    }

    public function incrementstep(){
        $this->validateForm();
        if($this->currentstep <$this->totalstep)
        {
            $this->currentstep ++;
        }

    }
    public function decrementstep(){
        if($this->currentstep>1){
            $this->currentstep --;
        }
    }

    public function submit(){
        $validated=$this->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'status'=>'required',
            'gender'=>'required',
        ]);

        multi::create($validated);


    }

    public function validateForm(){
        if($this->currentstep ===1)
        {
            $validated=$this->validate([
                'first_name'=>'required',
                'last_name'=>'required',
            ]);
        }
        elseif($this->currentstep ===2){
            if($this->currentstep ===2)
            {
                $validated=$this->validate([
                    'email'=>'required',
                    'phone'=>'required',
                ]);
            }
        }

    }

}
