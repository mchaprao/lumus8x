<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportType extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function reportEtes()
    {
        return $this->belongsToMany(ReportEte::class);
    }
}
