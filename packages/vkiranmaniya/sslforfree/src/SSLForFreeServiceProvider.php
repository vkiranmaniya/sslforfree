<?php

namespace Vkiran\SSLForFree;

use Illuminate\Support\ServiceProvider;

class SSLForFreeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot() {
        $this->loadRoutesFrom(__DIR__.'/routes/route.php');
        $this->publishes([
            __DIR__.'/config/sslforfree.php' => config_path('sslforfree.php'),
        ]);
    }
}
