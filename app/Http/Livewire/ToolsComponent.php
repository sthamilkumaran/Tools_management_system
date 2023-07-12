<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tool;
use App\Models\Addchecklist;

class ToolsComponent extends Component
{
    public $userName, $outDate, $toolCount;
    public $today;
    public array $toolLists = [];

    public function store(){
        $day = date('Y-m-d');
        $this->today = $day;
        // dd($this->outDate);
        try{
            // Create Category
            Tool::create([
                'userName'=>$this->userName,
                'outDate'=>$this->outDate,
                'toolLists' => json_encode($this->toolLists),

            ]);

            dd($this->outDate);

        }catch(\Exception $e){
            dd('error');
        }
    }

    public function render()
    {
        $tool = Tool::All();
        $addchecklist = Addchecklist::All();
        return view('livewire.tools-component',['tools' => $tool, 'addchecklist' => $addchecklist]);
    }
}
