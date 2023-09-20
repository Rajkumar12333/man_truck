<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TruckBlog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'content',
        'image',
        'truck_id',
    ];

    public function truck()
    {
        return $this->belongsTo(Truck::class, 'truck_id');
    }
}
