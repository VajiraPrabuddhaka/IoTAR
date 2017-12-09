<?php

namespace App\Http\Controllers;

use App\machine;
use Illuminate\Http\Request;
use App\component;


class machineDataController extends Controller
{
    public function fetchMachineData($id){
        $machine_components = component::where('m_id', $id)->get();
        return view('inc.machine', compact('machine_components', 'id'));
    }

    //handles adding of new components under a machine
    public function addNewComponent(Request $request, $id){

        //todo: validation

        $validatedData = $request->validate([
            'component_name' => 'required',
            'Start_value' => 'required',
            'End_value' => 'required',
            'topic' => 'required',
            'ip' => 'required',
            'port' => 'required',
            'time_interval' => 'required',
        ]);

        $json = json_encode($request->all());

        $my_var = json_decode($json, true); // convert it to an array.

        unset($my_var["_token"]);

        $json = json_encode($my_var);

        $type = $request->input('type');

        $component= new component();

        $component->m_id = $id;
        $component->JsonString = $json;
        $component->component_name = $request->input('component_name');
        $component->save();

        return redirect()->back();
    }

    //handles adding new machine
    public function addNewMachine(Request $request){

        //todo: validation

        $machine = new machine();
        $machine->name = $request->input('Name');
        $machine->location = $request->input('location');
        $machine->Description = $request->input('desc');

        $machine->save();

        return redirect('/');
    }

    public function fetchAll(Request $request){
        $machine_json = machine::all();
        return view('home', compact('machine_json'));
    }
}

/*


public function uploadImage(Request $request) {
    $req = $request->only('gallery_id','photo2');

    if ($request->hasFile('photo2')) {
        if ($request->file('photo2')->isValid()) {
            $destinationPath = 'uploads/gallery/'; // upload path
            $extension = $request->file('photo2')->getClientOriginalExtension(); // getting image extension
            $fileName = rand(11111,99999).'.'.$extension; // renaming image
            $request->file('photo2')->move($destinationPath, $fileName); // uploading file to given path
            Image::make($destinationPath.$fileName)->resize(500, null, function($constraint) {
                $constraint->aspectRatio(); $constraint->upsize();
            })->save($destinationPath.$fileName); $req['photo2'] = $fileName; } }

        $result = GalleryDetail::create($req);

        return response()->json(json_encode($result));
}*/