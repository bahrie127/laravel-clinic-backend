<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'nik',
        'kk',
        'name',
        'phone',
        'email',
        'gender',
        'birth_place',
        'birth_date',
        'is_deceased',
        'address_line',
        'city',
        'city_code',
        'province',
        'province_code',
        'district',
        'district_code',
        'village',
        'village_code',
        'rt',
        'rw',
        'postal_code',
        'marital_status',
        'relationship_name',
        'relationship_phone'
    ];
}
