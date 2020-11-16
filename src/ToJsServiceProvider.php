<?php

namespace Yazvonov\LaravelToJs;

use Blade;
use Illuminate\Support\ServiceProvider;

class ToJsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton('ToJs', function () {
            return new ToJsController();
        });

        Blade::directive('tojs', function () {
            $template = "window.laravel = <?php echo json_encode(app('ToJs')->get()); ?>;";

            return "<script>$template</script>";
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
