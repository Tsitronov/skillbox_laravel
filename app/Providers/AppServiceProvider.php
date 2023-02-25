<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('example',function(){
            return 'hello zaregistrirovano v serviskonteinere etoi functiei register servisprovaidera';
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.footer', function($view){
            $view->with('tagsCloud', \App\Tag::has('task')->get());
        });
    }
}
