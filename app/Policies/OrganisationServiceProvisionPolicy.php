<?php

namespace App\Policies;

use App\Models\OrganisationServiceProvision;
use App\Models\User;

class OrganisationServiceProvisionPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'organisation_service_provision_access');
        })->exists();
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, OrganisationServiceProvision $organisationServiceProvision): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'organisation_service_provision_show');
        })->exists();
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'organisation_service_provision_create');
        })->exists();
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, OrganisationServiceProvision $organisationServiceProvision): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'organisation_service_provision_edit');
        })->exists();
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, OrganisationServiceProvision $organisationServiceProvision): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'organisation_service_provision_delete');
        })->exists();
    }

    public function deleteAny(User $user): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'organisation_service_provision_delete');
        })->exists();
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, OrganisationServiceProvision $organisationServiceProvision): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'organisation_service_provision_delete');
        })->exists();
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, OrganisationServiceProvision $organisationServiceProvision): bool
    {
        return $user->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'organisation_service_provision_delete');
        })->exists();
    }
}
