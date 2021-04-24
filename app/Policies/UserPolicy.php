<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
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
    public function update(User $currentUser,User $user){
        return $currentUser->id===$user->id;
    }
    public function destroy(User $currentUser,User $user){
        // 比教程多加了一个条件，管理员不能删除其他拥有管理权限的用户
        return ($currentUser->is_admin)&&($currentUser->id!==$user->id)&&(!$user->is_admin);
    }
    public function follow(User $currentUser,User $user){
        return $currentUser->id !== $user->id;
    }
}
