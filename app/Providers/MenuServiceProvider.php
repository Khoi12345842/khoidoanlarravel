<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\HorMenu;

class MenuServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        View::composer('layouts.header', function ($view) {
            $menus = HorMenu::where('active', 1)
                ->whereNull('parent_id')
                ->orderBy('no', 'asc')
                ->with('children')
                ->get();
            $view->with('menus', $menus);
        });
    }
}