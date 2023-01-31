<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'role',
     
        
    ];

     
    public function users()
    {
        return $this->belongsTo(User::class);
    }


    public function addRole($input)
    {
     
        return static::create(array_only($input,$this->fillable));
    }


    public function findRole($id)
    {
        return static::where('id',$id)->first();
    }

    
    public function updateRole($id, $input)
    {
        return static::where('id',$id)->update(array_only($input,$this->fillable));
    }


    public function deleteRole($id)
    {
        return static::where('id',$id)->delete();
    }
}
