<?php

namespace Modules\Enroll\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
use Modules\Core\Events\BuildingSidebar;
use Modules\Core\Events\LoadingBackendTranslations;
use Modules\Enroll\Events\Handlers\RegisterEnrollSidebar;

class EnrollServiceProvider extends ServiceProvider
{
    use CanPublishConfiguration;
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBindings();
        $this->app['events']->listen(BuildingSidebar::class, RegisterEnrollSidebar::class);

        $this->app['events']->listen(LoadingBackendTranslations::class, function (LoadingBackendTranslations $event) {
            $event->load('enrolls', array_dot(trans('enroll::enrolls')));
            // append translations

        });
    }

    public function boot()
    {
        $this->publishConfig('enroll', 'permissions');

        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

    private function registerBindings()
    {
        $this->app->bind(
            'Modules\Enroll\Repositories\EnrollRepository',
            function () {
                $repository = new \Modules\Enroll\Repositories\Eloquent\EloquentEnrollRepository(new \Modules\Enroll\Entities\Enroll());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Enroll\Repositories\Cache\CacheEnrollDecorator($repository);
            }
        );
// add bindings

    }
}
