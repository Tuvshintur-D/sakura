<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/enroll'], function (Router $router) {
    $router->bind('enroll', function ($id) {
        return app('Modules\Enroll\Repositories\EnrollRepository')->find($id);
    });
    $router->get('enrolls', [
        'as' => 'admin.enroll.enroll.index',
        'uses' => 'EnrollController@index',
        'middleware' => 'can:enroll.enrolls.index'
    ]);
    $router->get('enrolls/create', [
        'as' => 'admin.enroll.enroll.create',
        'uses' => 'EnrollController@create',
        'middleware' => 'can:enroll.enrolls.create'
    ]);
    $router->post('enrolls', [
        'as' => 'admin.enroll.enroll.store',
        'uses' => 'EnrollController@store',
        'middleware' => 'can:enroll.enrolls.create'
    ]);
    $router->get('enrolls/{enroll}/edit', [
        'as' => 'admin.enroll.enroll.edit',
        'uses' => 'EnrollController@edit',
        'middleware' => 'can:enroll.enrolls.edit'
    ]);
    $router->put('enrolls/{enroll}', [
        'as' => 'admin.enroll.enroll.update',
        'uses' => 'EnrollController@update',
        'middleware' => 'can:enroll.enrolls.edit'
    ]);
    $router->delete('enrolls/{enroll}', [
        'as' => 'admin.enroll.enroll.destroy',
        'uses' => 'EnrollController@destroy',
        'middleware' => 'can:enroll.enrolls.destroy'
    ]);
// append

});
