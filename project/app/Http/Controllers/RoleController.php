<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function createRole(Request $request)
    {
        $role = Role::create(['name' => $request->input('name')]);

        return 'Роль успешно создана';
    }

    public function givePermission($roleId, $permissionName)
    {
        $role = Role::findOrFail($roleId);
        $permission = Permission::findOrCreate($permissionName);
        $role->givePermissionTo($permission);

        return 'Разрешение успешно добавлено роли';
    }

    public function revokePermission($roleId, $permissionName)
    {
        $role = Role::findOrFail($roleId);
        $permission = Permission::findByName($permissionName);
        $role->revokePermissionTo($permission);

        return 'Разрешение успешно отозвано у роли';
    }
}
