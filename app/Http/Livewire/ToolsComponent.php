<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
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

    // in tools store ----------------------------------------------------------------------------------------->
    public $intool, $inuserName, $inDate, $intoolCount, $intoolDam;
    public $intoolLists = [];
    public function instore(){
        $day =Carbon::today()->format("Y-m-d");
        $this->inDate = $day;

        $intool_Date_Name = DB::table('tools')->where('outDate', '=',$this->inDate)->where('userName', '=',$this->inuserName)->exists();
        $intool_Tool = DB::table('tools')->where('outDate', '=',$this->inDate)->where('userName', '=',$this->inuserName)->get('toolLists');

        $test = $intool_Tool->toArray();
        // dd($test);
        // dd($intool_Date_Name);
        // dd($intool_Name);

        try{
            if($intool_Date_Name){
                // dd('hello');
                if($test == $this->intoolLists){
                    dd('success');
                }else{
                    dd('worng');
                }
            // Intool::create([
            //     'inuserName'=>$this->inuserName,
            //     'inoutDate'=>$this->inoutDate,
            //     'intoolLists' => json_encode($this->intoolLists),
            //     'intoolCount' =>json_encode($this->intoolCount),
            //     'intoolDam' =>json_encode($this->intoolDam),
            // ]);


        }else{
            dd('gg');
        }

        }catch(\Exception $e){
            dd('error');
        }

    }

    public function render()
    {
        // frond get data---------------------------------------------->
        $today = Carbon::today()->format("Y-m-d");
        $count = 1;

        // database---------------------------------------------------->
        $tool = Tool::All();
        $addchecklist = Addchecklist::All();

        return view('livewire.tools-component',['tools' => $tool,
        'addchecklist' => $addchecklist,
        'today1' => $today,
        'toolcount' => $count]);
    }
}
