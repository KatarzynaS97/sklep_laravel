<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Relation::morphMap([
            'dress' => 'App\Models\Dress',
            'trousers' => 'App\Models\Trousers',
            'tshirt' => 'App\Models\Tshirt',
            'shirt' => 'App\Models\Shirt',
            'socks' => 'App\Models\Socks',
            'underwear' => 'App\Models\Underwear',





            // Dodaj inne mapowania typów produktów do klas modeli tutaj
        ]);
    }
}
