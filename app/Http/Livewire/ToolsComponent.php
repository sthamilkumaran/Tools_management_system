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

        // $intool_Date_Name = DB::table('tools')->where('outDate', '=',$this->inoutDate)->where('userName', '=',$this->inuserName)->exists();
        $intool_Tool = DB::table('tools')->where('outDate', '=',$this->inDate)->where('userName', '=', $this->inuserName)->first();

        // dd($intool_Date_Name->toolLists);
        $array =  (array) json_decode($intool_Tool->toolLists);
        dd($array);
        // $tool_array =  (array) json_decode($intool_Tool);
        // dd($array);
        // $tool_array = json_decode($intool_Tool);

        // if($tool_array[1] == "sd") {
        //     dd("tool_array");
        // } else {
        //     dd("not an array");
        // }
        // if($array == "sd") {
        //     dd("array");
        // } else {
        //     dd("not an array");
        // }
        // while loop for array check
        $i = 0;
        while($i < count($array))
        {
            // dd($array[$i]."\n");
            if($array == "sd") {
                dd("array");
            } else {
                dd("not an array");
            }
            $i++;
        }


        // $i = 0;
        // while($i < count($test))
        // {
        //     dd($test[$i]."\n");
        //     // echo $test[$i]."\n";
        //     $i++;
        // }
        // dd($this->intoolLists);
        // dd($intool_Date_Name);
        // dd($intool_Tool[1]);

        // try{
        //     if(){
        //         // dd('hello');
        //         // if($test[0] == $this->intoolLists[3]){
        //         //     dd('success');
        //         // }else{
        //         //     dd('worng');
        //         // }
        //     // Intool::create([
        //     //     'inuserName'=>$this->inuserName,
        //     //     'inoutDate'=>$this->inoutDate,
        //     //     'intoolLists' => json_encode($this->intoolLists),
        //     //     'intoolCount' =>json_encode($this->intoolCount),
        //     //     'intoolDam' =>json_encode($this->intoolDam),
        //     // ]);


        // }else{
        //     dd('gg');
        // }

        // }catch(\Exception $e){
        //     dd('error');
        // }

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
