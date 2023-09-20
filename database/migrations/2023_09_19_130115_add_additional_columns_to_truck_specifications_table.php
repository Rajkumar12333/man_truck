<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdditionalColumnsToTruckSpecifications extends Migration
{
    public function up()
    {
        Schema::table('truck_specifications', function (Blueprint $table) {
            $table->string('chassis_6x2_minus')->nullable();
            $table->string('chassis_6x2')->nullable();
            $table->string('chassis_6x4')->nullable();
            $table->string('chassis_6x6')->nullable();
            $table->string('chassis_8x4')->nullable();
            $table->string('chassis_8x4_slash_8x4')->nullable();
            $table->string('chassis_8x8')->nullable();
            $table->string('engine_series_d2066')->nullable();
            $table->float('external_length')->nullable();
            $table->float('external_width')->nullable();
            $table->float('interior_length')->nullable();
            $table->float('engine_tunnel_height')->nullable();
            $table->float('standing_height_on_engine_tunnel')->nullable();
            $table->integer('seat_quantity')->nullable();
            $table->float('standing_height_in_front_of_codriver_seat')->nullable();
            $table->integer('bed_quantity')->nullable();
            $table->float('lower_bed_length')->nullable();
            $table->float('maximum_lower_bed_width')->nullable();
            $table->float('lower_bed_width_behind_seats')->nullable();
            $table->float('height_above_lower_bed')->nullable();
            $table->float('upper_bed_length')->nullable();
            $table->float('upper_bed_width')->nullable();
            $table->float('height_above_upper_bed')->nullable();
            $table->string('roof_storage_compartments')->nullable();
            $table->string('roof_luggage_rack')->nullable();
            $table->string('rear_left_storage_box')->nullable();
            $table->string('rear_right_storage_box')->nullable();
            $table->string('central_storage_space_below_bed')->nullable();
            $table->integer('standard_longhaul_transport')->nullable();
            $table->integer('longdistance_transport_payload')->nullable();
            $table->integer('traction_construction_site')->nullable();
            $table->integer('distribution_transport')->nullable();
            $table->integer('municipal')->nullable();
            
            // Timestamp columns
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('truck_specifications', function (Blueprint $table) {
            $table->dropColumn([
                'chassis_6x2_minus',
                'chassis_6x2',
                'chassis_6x4',
                'chassis_6x6',
                'chassis_8x4',
                'chassis_8x4_slash_8x4',
                'chassis_8x8',
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
                'municipal',
            ]);
        });
    }
}
