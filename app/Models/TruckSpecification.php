<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Truck;


class TruckSpecification extends Model
{
    protected $fillable = [
        'truck_id',
        'chassis_4x2',
        'chassis_4x4',
        'chassis_6x2_minus',
        'chassis_6x2',
        'chassis_6x4',
        'chassis_6x6',
        'chassis_8x4',
        'chassis_8x4_slash_8x4',
        'chassis_8x8',
        'engine_series_d2676',
        'engine_series_d2066',
        'external_length',
        'external_width',
        'interior_length',
        'engine_tunnel_height',
        'standing_height_on_engine_tunnel',
        'seat_quantity',
        'standing_height_in_front_of_codriver_seat',
        'bed_quantity',
        'lower_bed_length',
        'maximum_lower_bed_width',
        'lower_bed_width_behind_seats',
        'height_above_lower_bed',
        'upper_bed_length',
        'upper_bed_width',
        'height_above_upper_bed',
        'roof_storage_compartments',
        'roof_luggage_rack',
        'rear_left_storage_box',
        'rear_right_storage_box',
        'central_storage_space_below_bed',
        'standard_longhaul_transport',
        'longdistance_transport_payload',
        'traction_construction_site',
        'distribution_transport',
        'municipal'
    ];
    public function truck()
    {
        return $this->belongsTo(Truck::class);
    }
}
