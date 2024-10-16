<?php

namespace App\Policies;

use App\Models\ServiceProvider;
use App\Models\User;

class ServiceProviderPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'service_provider_access');
        })->exists();
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, ServiceProvider $serviceProvider): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'service_provider_show');
        })->exists();
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'service_provider_create');
        })->exists();
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, ServiceProvider $serviceProvider): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'service_provider_edit');
        })->exists();
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ServiceProvider $serviceProvider): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'service_provider_delete');
        })->exists();
    }

    public function deleteAny(User $user): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'service_provider_delete');
        })->exists();
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, ServiceProvider $serviceProvider): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'service_provider_delete');
        })->exists();
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, ServiceProvider $serviceProvider): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'service_provider_delete');
        })->exists();
    }
}
