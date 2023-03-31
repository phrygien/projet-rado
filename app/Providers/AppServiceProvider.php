<?php

namespace App\Providers;

use App\Interfaces\ISalleInterface;
use App\Repository\SalleRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // enregistreme des interface et repository
        $this->app->bind(ISalleInterface::class, SalleRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
