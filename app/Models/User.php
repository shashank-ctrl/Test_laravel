<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Role;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'user_img',
        'roles',
    ];

    

    public function roles()
    {
        return $this->hasMany(Role::class, 'role', 'id');
    }

    

    public function addUser($input)
    {
     
        return static::create(array_only($input,$this->fillable));
    }


    public function findUser($id)
    {
        return static::where('id',$id)->first();
    }

    
    public function updateUser($id, $input)
    {
        return static::where('id',$id)->update(array_only($input,$this->fillable));
    }


    public function deleteUser($id)
    {
        return static::where('id',$id)->delete();
    }



    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
