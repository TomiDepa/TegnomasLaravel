<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Auth;

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
        Blade::directive('rol', function ($rol) {
            return "<?php if(Auth::check() && Auth::user()->rol->nombre === {$rol}): ?>";
        });
    
        Blade::directive('endrol', function () {
            return '<?php endif; ?>';
        });
    }


    
}
