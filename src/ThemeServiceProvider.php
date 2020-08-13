<?php

namespace codicastudio\DarkTheme;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{

    /**
     * Custom commands for the dark theme
     *
     * @var array
     */
    protected $commands = [
        'codicastudio\DarkTheme\Commands\AddSwitch',
        'codicastudio\DarkTheme\Commands\RemoveSwitch',
        'codicastudio\DarkTheme\Commands\On',
        'codicastudio\DarkTheme\Commands\Off',
    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::style('dark-theme', __DIR__ . '/../dist/css/theme.css');
            Nova::script('dark-theme', __DIR__ . '/../dist/js/theme.js');
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands($this->commands);
    }

}
