<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('formError', function ($name) {
            return "<?php echo session('errors') && session('errors')->has($name) ? 'is-danger' : ''; ?>";
        });

        Blade::directive('formHelp', function ($expression) {
            [$name, $actual_help] = explode(',', $expression);

            return "<?php
                if (session('errors') && session('errors')->has($name)) {
                    echo '<p class=\"help is-danger\">
                        ' . session('errors')->first($name) . '
                    </p>';
                } else {
                    echo '<p class=\"help\">
                        ' . $actual_help . '
                    </p>';
                }
            ?>";
        });
    }
}
