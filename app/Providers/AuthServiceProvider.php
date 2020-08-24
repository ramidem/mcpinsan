<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Asset' => 'App\Policies\AssetPolicy',
        'App\Item' => 'App\Policies\ItemPolicy',
        'App\Category' => 'App\Policies\CategoryPolicy',
        'App\Transaction' => 'App\Policies\TransactionPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isAdmin', function($user){
            return $user->role_id === 1;
        });
    }
}
