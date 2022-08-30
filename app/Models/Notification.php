<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'notification_type_id',
        'association_id'
    ];

    public static function notify(int $notification_type_id, string $association_id, $users){
        
        /*
            notification_type_id determines the members to notify
        */
        //create notification
        $notification = Notification::create(compact('notification_type_id', 'association_id'));

        // $users_to_notify = $this->notifyList($notification_type_id, $user);

        try {
            foreach ($users as $user) {
                $user->notifications()->attach($notification->id);
            }
        } catch (\Throwable $th) {
            $users->notifications()->attach($notification->id);
        }
    }

    public static function show($notifications){
        $result = collect();

        foreach ($notifications as $notification) {
            $association = Association::withTrashed()->find($notification->association_id);
            $description = NotificationType::find($notification->notification_type_id)->description;
            $time = $notification->created_at;

            $result->push(compact('association', 'description', 'time'));
            
        }

        return $result;
    }
    
    
}
