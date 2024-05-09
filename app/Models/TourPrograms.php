<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourPrograms extends Model
{
    use HasFactory;

    protected $fillable = [
        'tour_id',
        'day',
        'description',
        'image',
    ];

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
}
