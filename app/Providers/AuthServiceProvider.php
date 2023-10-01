<?php

namespace App\Providers;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
        $this->registerPolicies();

        // this is for checking whether user has admin role or not
        Gate::define('edit-pet', function (User $user) {
            return $user->role === 'admin';
        });

        Gate::define('Add-Product', function (User $user) {
            return $user->role === 'admin';
        });
    }
}
