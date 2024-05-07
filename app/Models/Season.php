<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;

    public function series()
    {
        // um para um
        return $this->belongsTo(Serie::class);
    }

    public function episodes()
    {
        // um para muitos
        return $this->hasMany(Episode::class);
    }
}
