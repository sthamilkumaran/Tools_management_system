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
        Schema::create('intools', function (Blueprint $table) {
            $table->id();
            $table->string('inuserName');
            $table->date('inDate')->nullable();
            $table->json('intoolLists')->nullable();
            $table->json('intoolCount')->nullable();
            $table->text('intoolDam')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('intools');
    }
};
