<?php

namespace App\Observers;

use App\Models\Analyze;
use Illuminate\Support\Str;

class AnalyzeObserver
{
    public function creating(Analyze $analyze)
    {
        $analyze->slug = Str::kebab($analyze->title);
        $analyze->uuid = Str::uuid();
    }

    public function updating(Analyze $analyze)
    {
        $analyze->slug = Str::kebab($analyze->title);
    }
}
