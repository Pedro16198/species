<?php

namespace App\Providers;
use App\Contracts\SpeciesServiceInterface;
use App\Services\SQLSpeciesService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
        SpeciesServiceInterface::class,
        SQLSpeciesService::class
    );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
