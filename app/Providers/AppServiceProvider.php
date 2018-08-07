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
        $this->loadViewsFrom(public_path('user/resources/views'), 'theme_u');
        $this->loadViewsFrom(public_path('admin/resources/views'), 'theme_uadmin');
        $this->loadViewsFrom(public_path('superadmin/resources/views'), 'theme_su');
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
