<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'packages';
    protected $fillable = ['name', 'description', 'days', 'nights'];

    public function batches()
    {
        return $this->hasMany(Batch::class);
    }

    public function latestBatch()
    {
        return $this->hasOne(Batch::class)->latestOfMany()->withDefault([
            'date' => null,
            'price' => 0,
            'available' => 0
        ]);
    }
}
