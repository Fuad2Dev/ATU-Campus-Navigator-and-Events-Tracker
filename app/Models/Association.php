<?php

namespace App\Models;

use App\Models\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Association extends Model
{
    use HasFactory, SoftDeletes;

    public $incrementing = false;

    protected $fillable = ['id', 'name', 'description'];

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function associates()
    {
        return $this->belongsToMany(User::class)->withPivot('role_id')->withTimestamps();
    }

    public function allMembers()
    {
        return $this->associates()->wherePivotNotIn('role_id', [4]);
    }

    public function myRole()
    {
        //User
        $user_id = auth()->user()->id;
        try {
            //code...
            $role_id = $this->associates->find($user_id)->pivot->role_id;
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
            $role_id = $this->associates->find($user_id)->pivot->role_id;

            return $role_id;
        } catch (\Throwable $th) {
            return "";
        }
    }

    public function admin()
    {
        return $this->associates()->wherePivot('role_id', 1);
    }

    public function coAdmin()
    {
        return $this->associates()->wherePivot('role_id', 2);
    }

    public function executives()
    {
        return $this->associates()->where(function ($query) {
            $query
                ->where('association_user.role_id', '=', 1)
                ->orWhere('association_user.role_id', '=', 2);
        });
    }

    public function members()
    {
        return $this->associates()->wherePivot('role_id', 3);
    }

    public function requests()
    {
        return $this->associates()->wherePivot('role_id', 4);
    }

    public function notifications()
    {

        return $this->belongsToMany(Notification::class)->withPivot('user_id', 'read');
    }

    public function myNotifications()
    {
        $role_id = $this->myRoleId();
        // return $this->myRoleId();
        switch ($role_id) {
            case 1:
                return $this->notifications->filter(function ($notification, $key) {
                    return ($notification->id == 1 || $notification->id == 4);
                });
                break;
            case 2:
                return $this->notifications->filter(function ($notification, $key) {
                    return ($notification->id == 1 || $notification->id == 4 || $notification->id == 5);
                });
                break;
            case 3:
                return $this->notifications->filter(function ($notification, $key) {
                    return ($notification->id == 2 || $notification->id == 6);
                });
                // return $this->notifications->where('id', 2)->orWhere('id', 6);
                break;
            case 4:
                return $this->notifications->filter(function ($notification, $key) {
                    return ($notification->id == 3 || $notification->id == 7 || $notification->id == 8);
                });
        }
    }

    public function pendingRequests()
    {
        return $this->associates->where('role_id', 4);
    }

    
}
