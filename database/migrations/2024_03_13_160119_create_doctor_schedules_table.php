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
        Schema::create('doctor_schedules', function (Blueprint $table) {
            $table->id();
            //doctor_id (foreign key) -> doctors
            $table->foreignId('doctor_id')->constrained('doctors');
            //day
            $table->string('day');
            //time
            $table->string('time');
            $table->string('status')->default('active');
            $table->string('note')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_schedules');
    }
};
