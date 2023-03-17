<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pricings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('room_id');
            $table->string('nightly',5);
            $table->string('weekend',10);
            $table->string('weekly',10);
            $table->string('monthly',10);
            $table->string('security_deposit',10);
            $table->boolean('additional_guest_allow');
            $table->string('additional_guest_cost');
            $table->string('cleaning_fee',5);
            $table->string('city_fee',5);
            $table->integer('minimum_number_of_days');
            $table->integer('maximum_number_of_days');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricings');
    }
};
