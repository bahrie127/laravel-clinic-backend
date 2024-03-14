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
        Schema::table('doctors', function (Blueprint $table) {
            //add id_ihs
            $table->string('id_ihs')->nullable()->after('sip');
            //add nik
            $table->string('nik')->nullable()->after('id_ihs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('doctors', function (Blueprint $table) {
            //
            $table->dropColumn('id_ihs');
            $table->dropColumn('nik');
        });
    }
};
