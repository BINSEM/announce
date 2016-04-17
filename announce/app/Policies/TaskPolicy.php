<?php

namespace App\Policies;

use App\User;
use App\Announce;

use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the given user can delete the given task.
     *
     * @param  User  $user
     * @param  Announce  $announce
     * @return bool
     */
    public function destroy(User $user, Announce $announce)
    {
        return $user->id === $announce->id;
    }
}
