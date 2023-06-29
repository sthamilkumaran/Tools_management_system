<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Overtime;

class OvertimeComponent extends Component
{
    public $User_id;
    public $User_name;
    public $overTime_Message;
    public $start_Time;
    public $end_Time;

    public function updated($fields){
        $this->validateOnly($fields,[
            'User_id' => 'required',
            'User_name' => 'required',
            'overTime_Message' => 'required',
            'start_Time' => 'required',
            'end_Time' => 'required',
        ]);
    }

    public function storeOvertimeData(){
        $this -> validate([
            'User_id' => 'required',
            'User_name' => 'required',
            'overTime_Message' => 'required',
            'start_Time' => 'required',
            'end_Time' => 'required',
        ]);

        $overtime = new Overtime();

        $overtime -> User_id = $this -> User_id;
        $overtime -> User_name = $this -> User_name;
        $overtime -> overTime_Message = $this -> overTime_Message;
        $overtime -> start_Time = $this -> start_Time;
        $overtime -> end_Time = $this -> end_Time;

        $overtime -> save();
        $this ->resetInput();
    }

    public function resetInput(){
        $this -> User_id ='';
        $this -> User_name ='';
        $this -> overTime_Message ='';
        $this -> start_Time ='';
        $this -> end_Time ='';

    }

    public function render()
    {
        $overtime = Overtime::All();
        return view('livewire.overtime-component',['overtime' => $overtime]);
    }
}
