<?php

namespace CodersHut\RolePermissionManager;

use Illuminate\Support\ServiceProvider;

class RolePermissionManagerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . 'database/migrations');
        $this->loadViewsFrom(__DIR__ . 'resources/views', 'rolePermissionManager');
        $this->loadRoutesFrom(__DIR__ . 'routes/web.php');
    }
}
