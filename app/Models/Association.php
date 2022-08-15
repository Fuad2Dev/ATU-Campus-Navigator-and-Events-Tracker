<?php

namespace App\Models;

use App\Models\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Association extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = ['id', 'name', 'description'];

    public function allMembers()
    {
        return $this->belongsToMany(User::class)->withPivot('role_id')->withTimestamps();
    }

    public function myRole()
    {
        //User
        $user_id = auth()->user()->id;
        try {
            //code...
            $role_id = $this->allMembers->find($user_id)->pivot->role_id;
            return Role::find($role_id)->description;
            
        } catch (\Throwable $th) {
            //throw $th;
            return "";
        }

    }

    public function myRoleId()
    {
        try {
            $user_id = auth()->user()->id;
            $role_id = $this->allMembers->find($user_id)->pivot->role_id;

            return $role_id;
        } catch (\Throwable $th) {
            return "";
        }
    }

    public function admin()
    {
        return $this->allMembers()->wherePivot('role_id', 1);
    }

    public function coAdmin()
    {
        return $this->allMembers()->wherePivot('role_id', 2);
    }

    public function members()
    {
        return $this->allMembers()->wherePivot('role_id', 3);
    }

    public function join(){
        
    }
}
