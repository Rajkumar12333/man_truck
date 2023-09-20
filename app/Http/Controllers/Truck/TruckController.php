<?php

namespace App\Http\Controllers\Truck;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Truck;

class TruckController extends Controller
{
    public function index()
    {
        // Your truck listing logic here
    }

    public function list()
    {
        $trucks = Truck::all();
        return view('auth.admin_register',compact('trucks'));
    }

    public function create()
    {
        // Display a form for creating a new truck
    }

    public function store(Request $request)
    {
        // echo "test";die;
        $image = $request->file('thumbnail') ;

        $new_name = $image->getclientoriginalname();
        
        $image->move(public_path(), $new_name);

        $datasheet = $request->file('datasheet') ;

        $datasheetname = $datasheet->getclientoriginalname();
        
        $datasheet->move(public_path(), $datasheetname);

        $brochure = $request->file('brochure') ;

        $brochurename = $brochure->getclientoriginalname();
        
        $brochure->move(public_path(), $brochurename);

        if($request->input('id')){
            $truck = Truck::findOrFail($request->input('id'));

            $truck->name = $request->input('name');
            $truck->description = $request->input('description');
            
            $truck->save();
        }else{
            $truck = new Truck([
                'name' => ucfirst($request->name),
                'description' => ucfirst($request->description),
                'image' => $new_name,
                'data_sheet' => $datasheetname,
                'brochure_upload' => $brochurename,
            ]);
            
            $truck->save();
        }
        
        
        $insertedTruckId = $truck->id;
        
            return response()->json([
                'status' => 200,
            ]);
        
    }

    public function edit(Request $request)
    {

    }

    public function update(Request $request, $id)
    {
        // Handle the form submission to update an existing truck
    }

    public function destroy($id)
    {
        $truck = Truck::find($id);


    // Delete the truck
    $truck->delete();    
    $trucks = Truck::all();
    return redirect('admin-reg')->with('success', 'Data Updated successfully.');
    // return view('auth.admin_register',compact('trucks'));
    }
}
