<?php

namespace Lionzhang\Ouser;

use Illuminate\Support\ServiceProvider;

class Md5HasherProvider extends ServiceProvider
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
    public function boot()
    {
        $this->app->singleton('md5hash', function () {
            return new Md5Hasher();
        });
    }
}
