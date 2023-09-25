<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Pengumuman;
use App\Models\User;

class PengumumanPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return $user->hasRole('admin');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Pengumuman $pengumuman)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->hasRole('admin');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Pengumuman $pengumuman)
    {
        return $user->hasRole('admin');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Pengumuman $pengumuman)
    {
        return $user->hasRole('admin');
    }
}
