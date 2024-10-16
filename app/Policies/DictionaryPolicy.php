<?php

namespace App\Policies;

use App\Models\Dictionary;
use App\Models\User;

class DictionaryPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'dictionary_access');
        })->exists();
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Dictionary $dictionary): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'dictionary_show');
        })->exists();
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'dictionary_create');
        })->exists();
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Dictionary $dictionary): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'dictionary_edit');
        })->exists();
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Dictionary $dictionary): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'dictionary_delete');
        })->exists();
    }

    public function deleteAny(User $user): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'dictionary_delete');
        })->exists();
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Dictionary $dictionary): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'dictionary_delete');
        })->exists();
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Dictionary $dictionary): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'dictionary_delete');
        })->exists();
    }
}
