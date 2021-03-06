<?php

namespace App\Policies;


use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Status;
use App\models\User;


class StatusPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
     public function destroy(User $user, Status $status)
       {
           return $user->id === $status->user_id;
       }
}
