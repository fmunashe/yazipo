<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Utility;

class UtilityPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'utility_access');
        })->exists();
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Utility $utility): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'utility_show');
        })->exists();
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'utility_create');
        })->exists();
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Utility $utility): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'utility_edit');
        })->exists();
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Utility $utility): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'utility_delete');
        })->exists();
    }

    public function deleteAny(User $user): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'utility_delete');
        })->exists();
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Utility $utility): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'utility_delete');
        })->exists();
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Utility $utility): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'utility_delete');
        })->exists();
    }
}