<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Eloquent\UsuarioEloquent;
use App\Repositories\Contracts\UsuarioInterface;
use Illuminate\Support\Facades\Schema;
use App\Repositories\Contracts\PermissionInterface;
use App\Repositories\Eloquent\PermissionEloquent;
use App\Repositories\Contracts\RoleInterface;
use App\Repositories\Eloquent\RoleEloquent;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UsuarioInterface::class, UsuarioEloquent::class);
        $this->app->bind(PermissionInterface::class, PermissionEloquent::class);
        $this->app->bind(RoleInterface::class, RoleEloquent::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
