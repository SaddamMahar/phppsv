<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vehicle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_registration_number');
            $table->string('vehicle_registration_authority')->nullable();
            $table->string('vehicle_type');
            $table->string('vehicle_make');
            $table->string('vehicle_model');
            $table->string('vehicle_color');
            $table->string('chassis_no')->nullable();
            $table->string('engine_no')->nullable();
            $table->string('avatar')->nullable();
            $table->string('seating_capacity')->nullable();
            $table->string('vehicle_route_no')->nullable();
            $table->string('route_city')->nullable();
            $table->string('route_permit_authority')->nullable();
            $table->string('route_permit_expiry')->nullable();
            $table->string('fitness_certificate_number')->nullable();
            $table->string('fitness_certificate_authority')->nullable();
            $table->timestamp('fitness_certificate_expiry')->nullable();
            $table->string('tyre_condition')->nullable();
            $table->timestamp('next_tyre_checking_date')->nullable();
            $table->timestamp('fire_extinguisher_expiry')->nullable();
            $table->string('vechicle_transport_company')->nullable();
            $table->string('vechicle_tyre_condition')->nullable();
            $table->string('manager_name')->nullable();
            $table->string('manager_cell_number')->nullable();
            $table->string('owners_name')->nullable();
            $table->string('owners_cell_number')->nullable();
            $table->string('vechicle_has_ac')->nullable();
            $table->string('head_lights')->nullable();
            $table->string('back_lights')->nullable();
            $table->string('fog_light')->nullable();
            $table->string('emergency_light')->nullable();
            $table->string('hazard_lights')->nullable();
            $table->string('front_screen_wiper')->nullable();
            $table->string('side_mirror')->nullable();
            $table->string('number_plate_as_per_pattern')->nullable();
            $table->string('road_safety_cones')->nullable();
            $table->string('first_aid_box')->nullable();
            $table->string('tracking')->nullable();
            $table->string('zero_sear')->nullable();
            $table->string('movie_recording')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
