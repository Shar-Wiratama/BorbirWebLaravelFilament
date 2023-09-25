<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penagihan extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'user_id',

        'previous_meter',
        'updated_meter',
        'photo',
        'total_payment',

        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
