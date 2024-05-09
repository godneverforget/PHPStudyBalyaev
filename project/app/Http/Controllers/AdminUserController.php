<?php

namespace App\Http\Controllers;

use App\Models\User;
use Spatie\Permission\Models\Role;

class AdminUserController extends Controller
{
    public function assignRole($userId, $roleName)
    {
        $user = User::findOrFail($userId);
        $role = Role::findOrCreate($roleName);
        $user->assignRole($role);

        return 'Роль успешно присвоена пользователю';
    }

    public function revokeRole($userId, $roleName)
    {
        $user = User::findOrFail($userId);
        $role = Role::findByName($roleName);
        $user->removeRole($role);

        return 'Роль успешно отозвана у пользователя';
    }
}
