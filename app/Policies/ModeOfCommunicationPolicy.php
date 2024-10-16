<?php

namespace App\Policies;

use App\Models\ModeOfCommunication;
use App\Models\User;

class ModeOfCommunicationPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'mode_of_communication_access');
        })->exists();
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, ModeOfCommunication $modeOfCommunication): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'mode_of_communication_show');
        })->exists();
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'mode_of_communication_create');
        })->exists();
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, ModeOfCommunication $modeOfCommunication): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'mode_of_communication_edit');
        })->exists();
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ModeOfCommunication $modeOfCommunication): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'mode_of_communication_delete');
        })->exists();
    }

    public function deleteAny(User $user): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'mode_of_communication_delete');
        })->exists();
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, ModeOfCommunication $modeOfCommunication): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'mode_of_communication_delete');
        })->exists();
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, ModeOfCommunication $modeOfCommunication): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'mode_of_communication_delete');
        })->exists();
    }
}
