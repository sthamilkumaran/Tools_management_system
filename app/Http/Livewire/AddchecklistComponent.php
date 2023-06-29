<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Addchecklist;
use App\Models\Camlist;
use App\Models\Wirelist;
use App\Models\Vehiclelist;

// use Carbon\Carbon;
// use Haruncpi\LaravelIdGenerator\IdGenerator;

class AddchecklistComponent extends Component
{

    public $adminName;
    public $adminId;
    public $inputTool;
    public $toolQty;
    public $inputCam;
    public $camQty;
    public $inputWire;
    public $wireQty;
    public $inputVehicle;
    public $vehicleQty;


    public $tooldata_edit_id;
    public $tooldata_delete_id;

    public $camdata_edit_id;
    public $camdata_delete_id;

    public $wiredata_edit_id;
    public $wiredata_delete_id;

    public $vehicledata_edit_id;
    public $vehicledata_delete_id;

    // tool datas post----------------------------------------------------------------------------
    public function updated($fields)
    {
        $this->validateonly($fields, [
            'adminName' => 'required',
            'adminId' => 'required',
            'inputTool' => 'required',
            'toolQty' => 'required',

        ]);
    }

    public function StoreToolsData()
    {
        $this->validate([
            // 'adminName' => 'required',
            // 'adminId' => 'required',
            'inputTool' => 'required',
            'toolQty' => 'required',

        ]);

        $addchecklist = new Addchecklist();

        $addchecklist->adminId = $this->adminId;
        $addchecklist->adminName = $this->adminName;
        $addchecklist->inputTool = $this->inputTool;
        $addchecklist->toolQty = $this->toolQty;

        $addchecklist->save();
        $this->dispatchBrowserEvent('Store_Tools_Data');

        $this->adminId = '';
        $this->adminName = '';
        $this->inputTool = '';
        $this->toolQty = '';

        $this->dispatchBrowserEvent('close-modal');
    }

    public function addToolform()
    {
        $this->dispatchBrowserEvent('show-add-tool-modal');
    }

    // Edit tool data--------------------------------------------------------------------------------------
    public function EditToolsData()
    {
        $this->validate([
            // 'adminName' => 'required',
            // 'adminId' => 'required',
            'inputTool' => 'required',
            'toolQty' => 'required',

        ]);

        $addchecklist = Addchecklist::where('id', $this->tooldata_edit_id)->first();

        $addchecklist->inputTool = $this->inputTool;
        $addchecklist->toolQty = $this->toolQty;

        $addchecklist->save();

        $this->adminId = '';
        $this->adminName = '';
        $this->inputTool = '';
        $this->toolQty = '';

        $this->dispatchBrowserEvent('close-modal');
    }
    // tooldata edit-----------------------------------------------------------------------------------------------

    public function editTooldatas($id)
    {

        $addchecklist = Addchecklist::where('id', $id)->first();

        $this->tooldata_edit_id = $addchecklist->id;
        $this->adminId = $addchecklist->adminId;
        $this->adminName = $addchecklist->adminName;
        $this->inputTool = $addchecklist->inputTool;
        $this->toolQty = $addchecklist->toolQty;

        $this->dispatchBrowserEvent('show-edit-tool-modal');
    }

    public function resetInputs()
    {
        $this->adminId = '';
        $this->adminName = '';
        $this->inputTool = '';
        $this->toolQty = '';
        $this->inputCam = '';
        $this->camQty = '';
        $this->inputWire = '';
        $this->wireQty = '';
        $this->inputVehicle = '';
        $this->vehicleQty = '';
    }
    // tool data delete----------------------------------------------------------------------------------
    public function deleteConfirmation($id)
    {
        $this->tooldata_delete_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation-modal');
    }

    public function deleteToolDatas()
    {
        $addchecklist = Addchecklist::where('id', $this->tooldata_delete_id)->first();
        $addchecklist->delete();
        $this->dispatchBrowserEvent('close-modal');
        $this->tooldata_delete_id = '';
    }
    public function cancel()
    {
        $this->tooldata_delete_id = '';
    }


    // cam data post--------------------------------------------------------------------------------------

    public function StoreCamData()
    {
        $this->validate([
            // 'adminName' => 'required',
            // 'adminId' => 'required',
            'inputCam' => 'required',
            'camQty' => 'required',

        ]);
        $camlist = new Camlist();
        $camlist->adminId = $this->adminId;
        $camlist->adminName = $this->adminName;
        $camlist->inputCam = $this->inputCam;
        $camlist->camQty = $this->camQty;

        $camlist->save();
        $this->dispatchBrowserEvent('Store_Cam_Data');

        $this->adminId = '';
        $this->adminName = '';
        $this->inputCam = '';
        $this->camQty = '';

        $this->dispatchBrowserEvent('closecam-modal');
    }

    public function addCamform()
    {
        $this->dispatchBrowserEvent('show-add-cam-modal');
    }

    // edit cam details----------------------------------------------------------------------------------------
    public function EditCamData()
    {
        $this->validate([
            // 'adminName' => 'required',
            // 'adminId' => 'required',
            'inputCam' => 'required',
            'camQty' => 'required',
        ]);

        $camlist = Camlist::where('id', $this->camdata_edit_id)->first();
        $camlist->inputCam = $this->inputCam;
        $camlist->camQty = $this->camQty;

        $camlist->save();

        $this->adminId = '';
        $this->adminName = '';
        $this->inputCam = '';
        $this->camQty = '';

        $this->dispatchBrowserEvent('closecam-modal');
    }

    public function editCamdatas($id)
    {
        $camlist = Camlist::where('id', $id)->first();

        $this->camdata_edit_id = $camlist->id;
        $this->adminId = $camlist->adminId;
        $this->adminName = $camlist->adminName;
        $this->inputCam = $camlist->inputCam;
        $this->camQty = $camlist->camQty;

        $this->dispatchBrowserEvent('show-edit-cam-modal');
    }

    // cam data delete----------------------------------------------------------------------------------
    public function camdeleteConfirmation($id)
    {
        $this->camdata_delete_id = $id;
        $this->dispatchBrowserEvent('show-camdelete-confirmation-modal');
    }

    public function deleteCamDatas()
    {
        $camlist = Camlist::where('id', $this->camdata_delete_id)->first();
        $camlist->delete();
        $this->dispatchBrowserEvent('closecam-modal');
        $this->camdata_delete_id = '';
    }
    public function camcancel()
    {
        $this->camdata_delete_id = '';
    }

    // wiring store datas ------------------------------------------------------------------------------------
    public function StoreWireData()
    {
        $this->validate([
            // 'adminName' => 'required',
            // 'adminId' => 'required',
            'inputWire' => 'required',
            'wireQty' => 'required',

        ]);
        $wirelist = new Wirelist();
        $wirelist->adminId = $this->adminId;
        $wirelist->adminName = $this->adminName;
        $wirelist->inputWire = $this->inputWire;
        $wirelist->wireQty = $this->wireQty;

        $wirelist->save();
        $this->dispatchBrowserEvent('Store_Cam_Data');

        $this->adminId = '';
        $this->adminName = '';
        $this->inputWire = '';
        $this->wireQty = '';

        $this->dispatchBrowserEvent('closewire-modal');
    }
    public function addWireform()
    {
        $this->dispatchBrowserEvent('show-add-wire-modal');
    }

    // edit wire details----------------------------------------------------------------------------------------------------
    public function EditWireData()
    {
        $this->validate([
            // 'adminName' => 'required',
            // 'adminId' => 'required',
            'inputWire' => 'required',
            'wireQty' => 'required',
        ]);

        $wirelist = Wirelist::where('id', $this->wiredata_edit_id)->first();
        $wirelist->inputWire = $this->inputWire;
        $wirelist->wireQty = $this->wireQty;

        $wirelist->save();

        $this->adminId = '';
        $this->adminName = '';
        $this->inputWire = '';
        $this->wireQty = '';

        $this->dispatchBrowserEvent('closecam-modal');
    }

    public function editWiredatas($id)
    {
        $wirelist = Wirelist::where('id', $id)->first();

        $this->wiredata_edit_id = $wirelist->id;
        $this->adminId = $wirelist->adminId;
        $this->adminName = $wirelist->adminName;
        $this->inputWire = $wirelist->inputWire;
        $this->wireQty = $wirelist->wireQty;

        $this->dispatchBrowserEvent('show-edit-wire-modal');
    }
    // wire delete data---------------------------------------------------------------------------------------------------
    public function wiredeleteConfirmation($id)
    {
        $this->wiredata_delete_id = $id;
        $this->dispatchBrowserEvent('show-wiredelete-confirmation-modal');
    }

    public function deleteWireDatas()
    {
        $wirelist = Wirelist::where('id', $this->wiredata_delete_id)->first();
        $wirelist->delete();
        $this->dispatchBrowserEvent('closewire-modal');
        $this->wiredata_delete_id = '';
    }
    public function wirecancel()
    {
        $this->wiredata_delete_id = '';
    }

    // Vehicle store datas-------------------------------------------------------------------------------

    public function StoreVehicleData()
    {
        $this->validate([
            // 'adminName' => 'required',
            // 'adminId' => 'required',
            'inputVehicle' => 'required',
            'vehicleQty' => 'required',

        ]);
        $vehiclelist = new Vehiclelist();
        $vehiclelist->adminId = $this->adminId;
        $vehiclelist->adminName = $this->adminName;
        $vehiclelist->inputVehicle = $this->inputVehicle;
        $vehiclelist->vehicleQty = $this->vehicleQty;

        $vehiclelist->save();
        $this->dispatchBrowserEvent('Store_Cam_Data');

        $this->adminId = '';
        $this->adminName = '';
        $this->inputVehicle = '';
        $this->vehicleQty = '';

        $this->dispatchBrowserEvent('closewire-modal');
    }
    public function addVehicleform()
    {
        $this->dispatchBrowserEvent('show-add-vehicle-modal');
    }

    // Vehicle edit datas-----------------------------------------------------------------------------
    public function EditVehicleData()
    {
        $this->validate([
            // 'adminName' => 'required',
            // 'adminId' => 'required',
            'inputVehicle' => 'required',
            'vehicleQty' => 'required',
        ]);

        $vehiclelist = Vehiclelist::where('id', $this->vehicledata_edit_id)->first();
        $vehiclelist->inputVehicle = $this->inputVehicle;
        $vehiclelist->vehicleQty = $this->vehicleQty;

        $vehiclelist->save();

        $this->adminId = '';
        $this->adminName = '';
        $this->inputVehicle = '';
        $this->vehicleQty = '';

        $this->dispatchBrowserEvent('closevehicle-modal');
    }

    public function editVehicledatas($id)
    {
        $vehiclelist = Vehiclelist::where('id', $id)->first();

        $this->vehicledata_edit_id = $vehiclelist->id;
        $this->adminId = $vehiclelist->adminId;
        $this->adminName = $vehiclelist->adminName;
        $this->inputVehicle = $vehiclelist->inputVehicle;
        $this->vehicleQty = $vehiclelist->vehicleQty;

        $this->dispatchBrowserEvent('show-edit-vehicle-modal');
    }
    // Vehicle delete datas ---------------------------------------------------------------------------
    public function vehicledeleteConfirmation($id)
    {
        $this->vehicledata_delete_id = $id;
        $this->dispatchBrowserEvent('show-vehicledelete-confirmation-modal');
    }

    public function deleteVehicleDatas()
    {
        $vehiclelist = Vehiclelist::where('id', $this->vehicledata_delete_id)->first();
        $vehiclelist->delete();
        $this->dispatchBrowserEvent('closevehicle-modal');
        $this->vehicledata_delete_id = '';
    }
    public function vehiclecancel()
    {
        $this->vehicledata_delete_id = '';
    }

    public function test(){
        dd($this->adminId);
    }
    public function render()
    {
        $addchecklist = Addchecklist::All();
        $camlist = Camlist::All();
        $wirelist = Wirelist::All();
        $vehiclelist = Vehiclelist::All();
        return view('livewire.addchecklist-component', [
            'addchecklist' => $addchecklist,
            'camlist' => $camlist,
            'wirelist' => $wirelist,
            'vehiclelist' => $vehiclelist,
        ]);
    }
}
