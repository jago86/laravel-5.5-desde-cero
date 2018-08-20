<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \View::composer('layouts.app', function($view) {
            if (\Auth::check()) {
                $lastNotes = \Auth::user()->notes()->latest()->take(2)->get();
                $view->with('lastNotes', $lastNotes);
            }
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
