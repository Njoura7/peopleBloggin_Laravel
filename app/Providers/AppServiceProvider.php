<?php

namespace App\Providers;
use Illuminate\Support\Facades\Blade;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::directive('sanitize', function ($expression) {
            return "<?php echo htmlspecialchars($expression, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>";
        });
    }
}
