<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ComposerServiceProvider extends ServiceProvider
{

    public function register()
    {
        View::composer(['*'],'App\Http\ViewComposers\MenuComposer');
    }

    public function boot()
    {

    }
}