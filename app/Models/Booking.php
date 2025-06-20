<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';

    protected $fillable = [
        'name',
        'email',
        'date',
        'description',
        'code',
        'status'
    ];

    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }
}
