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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            //nik
            $table->string('nik');
            //kk
            $table->string('kk');
            //name
            $table->string('name');
            //phone
            $table->string('phone');
            //email
            $table->string('email')->nullable();
            //gender enum male female
            $table->string('gender');
            //birth_place
            $table->string('birth_place');
            //birth_date
            $table->date('birth_date');
            //is_deceased
            $table->boolean('is_deceased')->default(false);
            //address line
            $table->text('address_line');
            //city
            $table->string('city');
            //city code
            $table->string('city_code');
            //province
            $table->string('province');
            //province code
            $table->string('province_code');
            //district
            $table->string('district');
            //district code
            $table->string('district_code');
            //village
            $table->string('village');
            //village code
            $table->string('village_code');
            //rt
            $table->string('rt');
            //rw
            $table->string('rw');
            //postal_code
            $table->string('postal_code');
            //marital_status
            $table->string('marital_status');
            //relationship name
            $table->string('relationship_name')->nullable();
            //relationship phone
            $table->string('relationship_phone')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
