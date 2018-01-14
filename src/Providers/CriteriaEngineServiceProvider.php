<?php

namespace CriteriaEngine\Providers;

use Illuminate\Support\ServiceProvider;

class CriteriaEngineServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../Config/config.php' => config_path('/criteria-engine/config.php'),
            __DIR__.'/../Config/profiles.php' => config_path('/criteria-engine/profiles.php'),
        ]);

         $this->loadTranslationsFrom(__DIR__.'/../Lang/es.php', 'criteria-engine');

        if ($this->app->runningInConsole()) {
            $this->commands([
                \CriteriaEngine\Commands\CriteriaEngineCommand::class,
                \CriteriaEngine\Commands\CriteriaCommand::class,
            ]);
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
             __DIR__.'/../Config/config.php', '/criteria-engine/config.php'
        );
    }
}
