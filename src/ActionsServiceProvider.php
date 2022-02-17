<?php

namespace Kirschbaum\Actions;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Kirschbaum\Actions\Commands\MakeActionCommand;

class ActionsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeActionCommand::class,
            ]);
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('actions', function () {
            return new Action();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides(): array
    {
        return [Action::class];
    }
}
