<?php

namespace Nnoel\ContactForm;

use Illuminate\Support\ServiceProvider;

class ContactFormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        $this->loadViewsFrom(__DIR__.'/views', 'contactForm');

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->mergeConfigFrom(
        __DIR__.'/config/contactForm.php', 'contactForm');

        $this->publishes([
        __DIR__.'/config/contactForm.php' => config_path('contactForm.php')
        ], 'config');





    }
}
