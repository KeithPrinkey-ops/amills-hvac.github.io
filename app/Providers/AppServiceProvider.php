<?php

namespace App\Providers;

use App\Livewire\Forms\ConsultationForm;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use Livewire\Livewire;
use Spatie\LaravelFlare\Facades\Flare;
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
   // app/Providers/AppServiceProvider.php
public function boot()
{
    Flare::determineVersionUsing(function() {
        return '1.0' ; // return your version number
    });
    Livewire::component('request-consultation-form', ConsultationForm::class);

}
}
