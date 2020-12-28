<?php

namespace App\Observers;

use App\Models\Carousel;
use Illuminate\Support\Str;

class CarouselObserver
{
    public function creating(Carousel $carousel)
    {
        $carousel->slug = Str::kebab($carousel->title);
        $carousel->uuid = Str::uuid();
    }

    public function updating(Carousel $carousel)
    {
        $carousel->slug = Str::kebab($carousel->title);
    }
}
