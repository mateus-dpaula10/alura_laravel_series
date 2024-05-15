<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;
    protected $fillable = ['number'];

    public function series()
    {
        // um para um
        return $this->belongsTo(Series::class);
    }

    public function episodes()
    {
        // um para muitos
        return $this->hasMany(Episode::class);
    }
}
