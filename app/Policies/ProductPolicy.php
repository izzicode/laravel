<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Product;

class ProductPolicy
{
    use HandlesAuthorization;

    /**
   * Determine whether the user can view the post.
   *
   * @param  \App\User  $user
   * @param  \App\Post  $post
   * @return mixed
   */
  public function view(User $user, Product $product)
  {
    return TRUE;
  }
 
  /**
   * Determine whether the user can create posts.
   *
   * @param  \App\User  $user
   * @return mixed
   */
  public function create(User $user, Product $product)
  {
    return TRUE;
  }
 
  /**
   * Determine whether the user can update the post.
   *
   * @param  \App\User  $user
   * @param  \App\Post  $post
   * @return mixed
   */
  public function update(User $user, Product $product)
  {
    return config('products.role');

  }
 
  /**
   * Determine whether the user can delete the post.
   *
   * @param  \App\User  $user
   * @param  \App\Post  $post
   * @return mixed
   */
  public function delete(User $user, Product $product)
  {
    return TRUE;
  }
}
