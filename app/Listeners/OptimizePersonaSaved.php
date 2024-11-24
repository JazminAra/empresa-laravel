<?php

namespace App\Listeners;

use App\Events\PersonaSaved;
use Intervention\Image\Facades\Image; #manual
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class OptimizePersonaSaved implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PersonaSaved $event)
    {
        //
        $image = Image::make(storage::get($event->persona->image))
           ->widen(600) //Redimensionamos la imagen a 600 px
           ->limitColors(255) //Limitamos el color a 255
           ->encode(); //Volvemos a codificar la nueva imagen
        //Sobreescribimos la misma imagen con la nueva imagen redimensionada

        Storage::put($event->persona->image, (string) $image);
    }
}
