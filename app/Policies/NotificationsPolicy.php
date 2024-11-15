<?php

namespace App\Policies;

use App\Models\Notifications;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class NotificationsPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Notifications $notifications): bool
    {
        return $user->id === $notifications->user->id || $user->hasPermission('view_notifications');
    }

    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create_notifications') || $user->is_admin;
    }

    public function update(User $user, Notifications $notifications): bool
    {
        return $user->id === $notifications->user->id || $user->hasPermission('edit_notifications');
    }

    public function delete(User $user, Notifications $notifications): bool
    {
        return $user->id === $notifications->user->id || $user->hasPermission('delete_notifications');
    }

    public function restore(User $user, Notifications $notifications): bool
    {
        return $user->is_admin || $user->hasPermission('restore_notifications');
    }

    public function forceDelete(User $user, Notifications $notifications): bool
    {
        return $user->is_admin || $user->hasPermission('force_delete_notifications');
    }
}
