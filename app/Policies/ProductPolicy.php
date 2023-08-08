<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Team;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{

    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        $teamAdmin = Team::find(1);
        $teamWebmaster = Team::find(5);

        if (
            $user->currentTeam == $teamAdmin &&
            $teamAdmin->hasUser($user) ||
            ($user->currentTeam == $teamWebmaster &&
                $teamWebmaster->hasUser($user)
            )
        ) {
            return true;
        } else {
            return false;
        }
    }
}
