<?php

namespace App\Policies;

use App\Models\District;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class DistrictPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'district_access');
        })->exists();
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, District $district): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'district_show');
        })->exists();
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'district_create');
        })->exists();
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, District $district): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'district_update');
        })->exists();
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, District $district): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'district_delete');
        })->exists();
    }
    public function deleteAny(User $user): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'district_delete');
        })->exists();
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, District $district): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'district_delete');
        })->exists();
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, District $district): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'district_delete');
        })->exists();
    }
}
