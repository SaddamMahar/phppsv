<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Driver extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('driver_name');
            $table->string('contact')->nullable();
            $table->string('address')->nullable();
            $table->timestamp('date_of_birth')->nullable();
            $table->string('cnic');
            $table->string('avatar')->nullable();
            $table->string('eye_sight')->nullable();
            $table->string('disability')->nullable();
            $table->string('license_no');
            $table->string('license_type')->nullable();
            $table->timestamp('license_expiry');
            $table->string('license_issuing_authority')->nullable();
            $table->string('license_verification')->nullable();
            $table->string('transport_company')->nullable();
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
        Schema::dropIfExists('drivers');
    }
}
