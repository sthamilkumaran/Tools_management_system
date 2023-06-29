<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tool;
use App\Models\Addchecklist;

class ToolsComponent extends Component
{
    public $addchecklists = [];

    public function render()
    {
        $tool = Tool::All();
        $addchecklist = Addchecklist::All();
        return view('livewire.tools-component',['tools' => $tool, 'addchecklist' => $addchecklist]);
    }
}
