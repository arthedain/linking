<?php

namespace Arthedain\Linking;

use Illuminate\Support\ServiceProvider;

class LinkingServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/migrations/2020_03_10_120159_create_linking_table.php' => database_path('/migrations/2020_03_10_120159_create_linking_table.php'),
            __DIR__ . '/Models/Linking.php' => app_path('/Models/Linking.php'),
            __DIR__.'/Resource/Linking.php' => app_path('/Nova/Linking.php'),
            __DIR__.'/Classes/LinkHelper.php' => app_path('/Classes/LinkHelper.php'),
        ], 'all');

        $this->publishes([
            __DIR__.'/migrations/2020_03_10_120159_create_linking_table.php' => database_path('/migrations/2020_03_10_120159_create_linking_table.php'),
        ], 'migration');
        $this->publishes([
            __DIR__ . '/Models/Linking.php' => app_path('Linking.php'),
        ], 'model');
        $this->publishes([
            __DIR__.'/Resource/Linking.php' => app_path('/Nova/Linking.php'),
        ], 'nova-resource');
        $this->publishes([
            __DIR__.'/Classes/LinkHelper.php' => app_path('/Classes/LinkHelper.php'),
        ], 'class');
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
