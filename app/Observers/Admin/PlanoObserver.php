<?php

namespace App\Observers\Admin;

use App\Models\Plano;
use Illuminate\Support\Str;

class PlanoObserver
{
    /**
     * Handle the Plano "creating" event.
     *
     * @param  \App\Models\Plano  $plano
     * @return void
     */
    public function creating(Plano $plano)
    {
        $plano->url = Str::slug($plano->nome,'_');
        $plano->valor = Str::of($plano->valor)->replace('.', '');
        $plano->valor = Str::of($plano->valor)->replace(',', '.');
       
    }

    /**
     * Handle the Plano "updating" event.
     *
     * @param  \App\Models\Plano  $plano
     * @return void
     */
    public function updating(Plano $plano)
    {
        $plano->url = Str::slug($plano->nome,'_');
        $plano->valor = Str::of($plano->valor)->replace('.', '');
        $plano->valor = Str::of($plano->valor)->replace(',', '.');

    }

    /**
     * Handle the Plano "deleted" event.
     *
     * @param  \App\Models\Plano  $plano
     * @return void
     */
    public function deleted(Plano $plano)
    {
        //
    }

    /**
     * Handle the Plano "restored" event.
     *
     * @param  \App\Models\Plano  $plano
     * @return void
     */
    public function restored(Plano $plano)
    {
        //
    }

    /**
     * Handle the Plano "force deleted" event.
     *
     * @param  \App\Models\Plano  $plano
     * @return void
     */
    public function forceDeleted(Plano $plano)
    {
        //
    }
}
