<?php
/**
 * Created by PhpStorm.
 * User: lucas.trindade
 * Date: 01/07/2016
 * Time: 20:13
 */
namespace App\Repositories;

use App\User;

class TaskRepository
{
    /**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return $user->tasks()
            ->orderBy('created_at', 'asc')
            ->get();
    }
}