<?php

namespace App\Repositories\Eloquent;

use App\Models\Rol;
use App\Repositories\Interfaces\RolInterface;

class RolRepository implements RolInterface
{
    public function getAllRoles()
    {
        $roles = Rol::all();

        return $roles;
    }

    public function getRoleById($id)
    {
        $role = Rol::find($id);

        return !$role ? null : $role;
    }

    public function createRole(array $data)
    {
        $role = Rol::create($data);

        return $role;
    }

    public function updateRole($id, array $data)
    {
        $role = Rol::find($id);

        if (!$role) {
            return null;
        }

        $role->update($data);

        return $role;
    }

    public function deleteRole($id)
    {
        $role = Rol::find($id);

        if (!$role) {
            return null;
        }

        $role->delete();

        return true;
    }
}