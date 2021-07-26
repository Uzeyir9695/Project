<?php

namespace App\Providers;

use App\Models\Role;
use App\Models\User;
use App\Policies\EasyPolicy;
use Illuminate\Auth\Access\Response;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model\User' => 'App\Policies\EasyPolicy',
        User::class => EasyPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isTeacher', function(User $user){
            return  Str::endsWith($user->email, '@emis.edu.ge');
        });

        Gate::define('isAdmin', function(User $user){
            return  Str::endsWith($user->email, '@admin.com');
        });

    }
}
