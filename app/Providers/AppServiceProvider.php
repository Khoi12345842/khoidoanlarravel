<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
    public function boot(): void
    {
        //
    }
    public function map()
{
    $this->mapWebRoutes();
    
    Route::prefix('admincp')
         ->middleware('web')
         ->namespace($this->namespace)
         ->group(base_path('routes/web.php'));
}

}
