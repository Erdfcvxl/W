<?php
/**
 * Created by PhpStorm.
 * User: Tomas
 * Date: 6/9/2017
 * Time: 5:26 PM
 */

namespace App\CMS;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;


class CMSServiceProvider extends ServiceProvider
{
    protected $namespace = 'App\CMS\Http\Controllers';

    public function register()
    {
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->app->make('Illuminate\Database\Eloquent\Factory')->load(__DIR__ . '/database/factories');


        $this->loadViewsFrom(__DIR__ . '/resources/views', 'cms');

    }

    public function map()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(__DIR__ . '/routes/routes.php');
    }

    private function mapWebRoutes() {
        $config = $this->app['config']-get('cms.route',  []);
        $config['namespace'] =$this->namespace;

        Route::group(
            $config,
            __DIR__ . '/../routes/routes.php'
        );
    }
}