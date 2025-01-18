<?php

namespace App\Policies;

use App\Models\Audio;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class AudioPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'audio_access');
        })->exists();
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Audio $audio): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'audio_show');
        })->exists();
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'audio_create');
        })->exists();
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Audio $audio): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'audio_edit');
        })->exists();
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Audio $audio): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'audio_delete');
        })->exists();
    }
    public function deleteAny(User $user): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'audio_delete');
        })->exists();
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Audio $audio): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'audio_delete');
        })->exists();
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Audio $audio): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'audio_delete');
        })->exists();
    }
}
