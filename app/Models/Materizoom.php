<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materizoom extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function zoom()
    {
        return $this->belongsTo(Zoom::class);
    }
}
