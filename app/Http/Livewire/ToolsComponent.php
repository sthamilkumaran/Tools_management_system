<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tool;
use App\Models\Addchecklist;
use Carbon\Carbon;

class ToolsComponent extends Component
{
    public $userName, $today;
    public $toolLists = [];
    public $toolCount = [];

    public function store(){
        $day = Carbon::today()->format("Y-m-d");
        $this->today = $day;
        $count = 1;
        $this->toolCount = $count;
        // dd($this->outDate);
        try{
            // Create Category
            Tool::create([
                'userName'=>$this->userName,
                'outDate'=>$this->today,
                'toolLists' => json_encode($this->toolLists),
                'toolCount' => json_encode($this->toolCount),
            ]);

            dd($this->toolCount);

        }catch(\Exception $e){
            dd('error');
        }
    }

    public function render()
    {
        $tool = Tool::All();
        $today = Carbon::today()->format("Y-m-d");
        $count = 1;
        $addchecklist = Addchecklist::All();
        return view('livewire.tools-component',['tools' => $tool, 'addchecklist' => $addchecklist, 'today1' => $today, 'toolcount' => $count]);
    }
}
