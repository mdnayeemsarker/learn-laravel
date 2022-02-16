<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
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
        //databease get data

        $data = array();
    
        $data['a'] = 10;
        $data['b'] = 20;
        $data['c'] = 30;
        $data['d'] = 40;
        $data['e'] = 50;
        $data['f'] = 60;
        $data['g'] = 70;
        $data['h'] = 80;
        $data['i'] = 90;
        $data['j'] = 100;

        view()->share('key', $data);


    }
}
