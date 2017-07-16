<?php

namespace Aitor24\Notifier;

use Illuminate\Support\ServiceProvider;

class NotifierServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/Resources/Views', 'notifier');

        $this->publishes([
            __DIR__.'/Config/notifier.php' => config_path('notifier.php'),
        ], 'notifer_config');

        $this->publishes([
            __DIR__.'/Resources/Views' => base_path('resources/views/vendor/Aitor24/Notifier'),
        ], 'notifier_views');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/Config/notifier.php', 'notifier');
    }
}
