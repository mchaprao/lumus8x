<?php

namespace App\Observers;

use App\Models\ReportEte;
use Illuminate\Support\Str;

class ReportEteObserver
{
    public function creating(ReportEte $r_ete)
    {
        $r_ete->uuid = Str::uuid();
    }

    // public function updating(Visit $visit)
    // {
    //     $visit->url = Str::kebab($visit->name);
    // }
}
