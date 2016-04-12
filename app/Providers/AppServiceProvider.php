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
        view()->share('categoryTree', \App\Category::with('children.moduleInstance', 'moduleInstance')->getTreeByParentId(0, ['id_kategoria', 'title', 'instance', 'rodzic']));
        view()->share('topLinks', \App\NavMenu::topLinks());
        view()->share('bottomLinks', \App\NavMenu::bottomLinks());
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
