<?php

namespace App\Observers;

use Illuminate\Support\Str;
use App\Models\Visit;

class VisitObserver
{
    public function creating(Visit $visit)
    {
        $visit->uuid = Str::uuid();
    }

    // public function updating(Visit $visit)
    // {
    //     $visit->url = Str::kebab($visit->name);
    // }
}
