<?php

namespace App\Policies;

use App\Models\OnDemandService;
use App\Models\User;

class OnDemandServicePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'ondemand_service_access');
        })->exists();
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, OnDemandService $onDemandService): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'ondemand_service_show');
        })->exists();
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'ondemand_service_create');
        })->exists();
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, OnDemandService $onDemandService): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'ondemand_service_edit');
        })->exists();
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, OnDemandService $onDemandService): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'ondemand_service_delete');
        })->exists();
    }

    public function deleteAny(User $user): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'ondemand_service_delete');
        })->exists();
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, OnDemandService $onDemandService): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'ondemand_service_delete');
        })->exists();
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, OnDemandService $onDemandService): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'ondemand_service_delete');
        })->exists();
    }
}
