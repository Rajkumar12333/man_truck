<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTruckSpecificationsTable extends Migration
{
    public function up()
    {
        Schema::create('truck_specifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('truck_id');
            $table->string('chassis_4x2');
            $table->string('chassis_4x4');
            $table->string('engine_series_d2676');
            // Add more fields here as needed
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('truck_specifications');
    }
}

