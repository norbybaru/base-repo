<?php namespace NorbyBaru\BaseRepoLayer\Tests\Fixtures\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * @package NorbyBaru\BaseRepoLayer\Tests\Fixtures\Models
 */
class User extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}