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
        $this->loadViewsFrom(public_path('resources/superadmin/views'), 'theme_s');
        $this->loadViewsFrom(public_path('resources/admin/views'), 'theme_a');
        $this->loadViewsFrom(public_path('resources/user/views'), 'theme_u');
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
