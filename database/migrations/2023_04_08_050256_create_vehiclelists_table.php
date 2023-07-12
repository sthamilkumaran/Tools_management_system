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
        Schema::create('vehiclelists', function (Blueprint $table) {
            $table->id();
            $table->string('adminId');
            $table->string('adminName');
            $table->string('inputVehicle')->uniqid();
            $table->string('vehicleQty');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiclelists');
    }
};
