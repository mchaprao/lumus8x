<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportEte extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_id',
        'date_at',
        'user_id',
        'report_type_id',
        'arquivo'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function reportType()
    {
        return $this->belongsTo(ReportType::class);
    }
}
