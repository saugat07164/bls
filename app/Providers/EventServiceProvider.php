<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Event::listen(Registered::class, function ($event) {
            $user = $event->user;

            // Ensure the user exists and is an instance of User
            if (!$user instanceof User) {
                return;
            }

            // Find the 'visitor' role, with caching for performance
            $visitorRole = Role::where('name', 'visitor')->first();

            // Only attach if role exists and user doesn't already have it
            if ($visitorRole && !$user->roles()->find($visitorRole->id)) {
                $user->roles()->attach($visitorRole);
            }
        });
    }
}