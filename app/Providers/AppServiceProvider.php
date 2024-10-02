<?php

namespace App\Providers;


use App\Livewire\Wizard;
use App\Livewire\FirstStep;
use App\Livewire\SecondStep;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;


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
        Livewire::component('wizard', Wizard::class);

        Livewire::component('first-step', FirstStep::class);
        Livewire::component('second-step', SecondStep::class);
    }
}
