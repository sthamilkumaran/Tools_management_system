<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Firstreport;

class FirstreportComponent extends Component
{
    public $User_id;
    public $User_location;
    public $User_selfie;
    public $User_layout;
    public $User_task1;
    public $User_task2;
    public $User_task3;
    public $User_task4;
    public $User_task5;
    public $User_T_time1;
    public $User_T_time2;
    public $User_T_time3;
    public $User_T_time4;
    public $User_T_time5;
    public $User_name;
    public $User_status;
    public $Special_note;
    




    public function updated($fields){
        $this->validateOnly($fields,[
            'User_id' => 'required',
            'User_location' => 'required',
            'User_selfie' => 'required',
            'User_layout' => 'required',
            'User_task1' => 'required',
            'User_task2' => 'required',
            'User_task3' => 'required',
            'User_task4' => 'required',
            'User_task5' => 'required',
            'User_T_time1' => 'required',
            'User_T_time2' => 'required',
            'User_T_time3' => 'required',
            'User_T_time4' => 'required',
            'User_T_time5' => 'required',
            'User_name' => 'required',
            'User_status' => 'required',
            'Special_note' => 'required',
        ]);
    }

    public function render()
    {
        return view('livewire.firstreport-component');
    }
}
