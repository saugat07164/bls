<?php

namespace App\Providers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register any application authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        // Listen to the Registered event
        Event::listen(Registered::class, function ($event) {
            $user = $event->user;

            // Ensure it's a User instance
            if (!$user instanceof User) {
                return;
            }

            // Retrieve the 'visitor' role (cached for performance)
            $visitorRole = cache()->rememberForever('role.visitor', function () {
                return Role::where('name', 'visitor')->first();
            });

            // Attach only if role exists and user doesn't already have it
            if ($visitorRole && !$user->roles->contains($visitorRole)) {
                $user->roles()->attach($visitorRole);
            }
        });
    }
}