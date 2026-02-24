<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\Interfaces\UserInterface;

class UserRepository implements UserInterface
{
    public function getAllUsers()
    {
        $users = User::all();

        return $users;
    }

    public function getUserById($id)
    {
        $user = User::find($id);

        return !$user ? null : $user;
    }

    public function createUser(array $data)
    {
        $user = User::create($data);

        return $user;
    }

    public function updateUser($id, array $data)
    {
        $user = User::find($id);

        if (!$user) {
            return null;
        }

        $user->update($data);

        return $user;
    }

    public function deleteUser($id)
    {
        $user = User::find($id);

        if (!$user) {
            return null;
        }

        $user->delete();

        return true;
    }
}