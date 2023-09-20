<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'description',
        'image',
        'awards', // Add 'awards' field
        'data_sheet', // Add 'data_sheet' field
        'brochure_upload', // Add 'brochure_upload' field
    ];
}
