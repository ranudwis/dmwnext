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
            $data = explode(',', $expression, 2);
            $name = $data[0];

            if (isset($data[1])) {
                $use_help = 'true';
                $actual_help = trim($data[1]);
            } else {
                $use_help = 'false';
                $actual_help = "''";
            }

            return "<?php
                if (session('errors') && session('errors')->has($name)) {
                    echo '<p class=\"help is-danger\">
                        ' . session('errors')->first($name) . '
                    </p>';
                } else if ($use_help) {
                    echo '<p class=\"help\">
                    ' . $actual_help . '</p>';
                }
            ?>";
        });
    }
}
