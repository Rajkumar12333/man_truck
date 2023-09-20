<?php

namespace App\Http\Controllers\Truck;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Truck;
use App\Models\TruckSpecification;

class TruckController extends Controller
{
    public function index()
    {
        // Your truck listing logic here
    }

    public function show($id)
    {
        // Display details of a specific truck
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
    public function truck_spec_view()
    {
        $trucks = TruckSpecification::all();
        return view('auth.truck_spec',compact('trucks'));
    }
    public function truck_spec_store(Request $request)
    {

      


            $truck = new TruckSpecification([
                 'truck_id' => ucfirst($request->truck_id),
                'chassis_4x2' => ucfirst($request->chassis_4x2),
                'chassis_4x4' => ucfirst($request->chassis_4x4),
                'chassis_6x2_minus' => ucfirst($request->chassis_6x2_minus),
                'chassis_6x2' => ucfirst($request->chassis_6x2),
                'chassis_6x4' => ucfirst($request->chassis_6x4),
                'chassis_6x6' => ucfirst($request->chassis_6x6),
                'chassis_8x4' => ucfirst($request->chassis_8x4),
                'chassis_8x4_slash_8x4' => ucfirst($request->chassis_8x4_slash_8x4),
                'chassis_8x8' => ucfirst($request->chassis_8x8),
                'engine_series_d2676' => ucfirst($request->engine_series_d2676),
                'engine_series_d2066' => ucfirst($request->engine_series_d2066),
                'external_length' => ucfirst($request->external_length),
                'external_width' => ucfirst($request->external_width),
                'interior_length' => ucfirst($request->interior_length),
                'engine_tunnel_height' => ucfirst($request->engine_tunnel_height),
                'standing_height_on_engine_tunnel' => ucfirst($request->standing_height_on_engine_tunnel),
                'seat_quantity' => ucfirst($request->seat_quantity),
                'standing_height_in_front_of_codriver_seat' => ucfirst($request->standing_height_in_front_of_codriver_seat),
                'bed_quantity' => ucfirst($request->bed_quantity),
                'lower_bed_length' => ucfirst($request->lower_bed_length),
                'maximum_lower_bed_width' => ucfirst($request->maximum_lower_bed_width),
                'lower_bed_width_behind_seats' => ucfirst($request->lower_bed_width_behind_seats),
                'height_above_lower_bed' => ucfirst($request->height_above_lower_bed),
                'upper_bed_length' => ucfirst($request->upper_bed_length),
                'upper_bed_width' => ucfirst($request->upper_bed_width),
                'height_above_upper_bed' => ucfirst($request->height_above_upper_bed),
                'roof_storage_compartments' => ucfirst($request->charoof_storage_compartmentsssis_4x4),
                'roof_luggage_rack' => ucfirst($request->roof_luggage_rack),
                'rear_left_storage_box' => ucfirst($request->rear_left_storage_box),
                'rear_right_storage_box' => ucfirst($request->rear_right_storage_box),
                'central_storage_space_below_bed' => ucfirst($request->central_storage_space_below_bed),
                'standard_longhaul_transport' => ucfirst($request->standard_longhaul_transport),
                'longdistance_transport_payload' => ucfirst($request->longdistance_transport_payload),
                'traction_construction_site' => ucfirst($request->traction_construction_site),
                'distribution_transport' => ucfirst($request->distribution_transport),
                'municipal' => ucfirst($request->municipal),
                'updated_at' => now(),
                'created_at' => now(),

            ]);
            
            $truck->save();
            // $truck = new TruckSpecification([
            //     'truck_id' => ucfirst($request->truck_id),
            //     'chassis_4x2' => $request->chassis_4x2, // Provide a valid value here
            //     'chassis_4x4' => $request->chassis_4x4, // Provide a valid value here
            //     'updated_at' => now(),
            //     'created_at' => now(),
            // ]);
            
            $truck->save();
        
        
        $insertedTruckId = $truck->id;
        
            return response()->json([
                'status' => 200,
            ]);
        
    }

}
