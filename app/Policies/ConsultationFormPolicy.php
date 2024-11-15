<?php

namespace App\Policies;

use App\Models\ConsultationForm;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;


class ConsultationFormPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, ConsultationForm $consultationForm): bool
    {
        // Allow only the owner or users with 'view_consultations' permission
        return $user->id === $consultationForm->user_id || $user->hasPermissionTo('view_consultations');
    }

    public function create(User $user): bool
    {
        // Allow users with 'create_consultations' permission or admins
        return $user->hasPermissionTo('create_consultations') || $user->is_admin;
    }

    public function update(User $user, ConsultationForm $consultationForm): bool
    {
        // Allow if the user is the owner or has 'edit_consultations' permission
        return $user->id === $consultationForm->user_id || $user->hasPermissionTo('edit_consultations');
    }


    public function delete(User $user, ConsultationForm $consultationForm): bool
    {
        // Allow if the user is the owner or has 'delete_consultations' permission
        return $user->id === $consultationForm->user_id || $user->hasPermissionTo('delete_consultations');
    }


    public function restore(User $user, ConsultationForm $consultationForm): bool
    {
        // Allow only admins or users with 'restore_consultations' permission
        return $user->is_admin || $user->hasPermissionTo('restore_consultations');
    }

    public function forceDelete(User $user, ConsultationForm $consultationForm): bool
    {
        // Allow only admins or users with 'force_delete_consultations' permission
        return $user->is_admin || $user->hasPermissionTo('force_delete_consultations');
    }

}
