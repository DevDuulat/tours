<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'cover',
        'image',
        'description',
        'date_to',
        'date_from',
        'price',
        'type',
        'region_id',
    ];

    protected $dates = [
        'date_to',
        'date_from',
    ];

    protected $casts = [
        'price' => 'decimal:2',
    ];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function programs()
    {
        return $this->hasMany(TourPrograms::class);
    }

}
