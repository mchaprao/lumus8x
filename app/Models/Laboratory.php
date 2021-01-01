<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratory extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    

    public function analyzes()
    {
        return $this->belongsToMany(Analyze::class);
    }
}
