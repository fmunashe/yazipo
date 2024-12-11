<?php

namespace App\Policies;

use App\Models\Poll;
use App\Models\User;

class PollPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'poll_access');
        })->exists();
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Poll $poll): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'poll_show');
        })->exists();
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'poll_create');
        })->exists();
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Poll $poll): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'poll_edit');
        })->exists();
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Poll $poll): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'poll_delete');
        })->exists();
    }

    public function deleteAny(User $user): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'poll_delete');
        })->exists();
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Poll $poll): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'poll_delete');
        })->exists();
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Poll $poll): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'poll_delete');
        })->exists();
    }
}
