<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('measurement_one_minutes', function (Blueprint $table) {
            $table->id();
            $table->integer('device_id')->nullable();
            $table->integer('client_id')->nullable();
            $table->float('last_voltage_l1')->nullable();
            $table->float('last_voltage_l2')->nullable();
            $table->float('last_voltage_l3')->nullable();
            $table->float('last_power_value')->nullable();
            $table->string('last_power_set_active')->nullable();
            $table->float('last_frequency')->nullable();
            $table->integer('energy_data')->nullable();
            $table->string('requested_timestamp')->nullable();
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
        Schema::dropIfExists('measurement_one_minutes');
    }
};
