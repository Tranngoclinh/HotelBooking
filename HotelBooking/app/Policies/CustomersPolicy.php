<?php

namespace App\Policies;

use App\Models\Customers;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CustomersPolicy
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
        return $user->hasPermission('Customers_viewAny');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Customers $customers)
    {
        return $user->hasPermission('Customers_view');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->hasPermission('Customers_create');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Customers $customers)
    {
        return $user->hasPermission('Customers_update');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Customers $customers)
    {
        return $user->hasPermission('Customers_delete');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Customers $customers)
    {
        return $user->hasPermission('Customers_restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Customers $customers)
    {
        return $user->hasPermission('Customers_forceDelete');
    }
}
