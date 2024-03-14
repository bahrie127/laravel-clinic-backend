<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

        //doctor_name
        // $table->string('doctor_name');
        // //doctor_specialist
        // $table->string('doctor_specialist');
        // //doctor_phone
        // $table->string('doctor_phone');
        // //doctor_email
        // $table->string('doctor_email');
        // //photo
        // $table->string('photo')->nullable();
        // //address
        // $table->string('address')->nullable();
        // //sip
        // $table->string('sip');

    protected $fillable = [
        'doctor_name',
        'doctor_specialist',
        'doctor_phone',
        'doctor_email',
        'photo',
        'address',
        'sip',
        'id_ihs',
        'nik'
    ];
}
