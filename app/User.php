<?php

namespace Web;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
// use Carbon\Carbon;

class User extends Authenticatable
{

    use EntrustUserTrait; // add this trait to your user model

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
                    'unique_number',
                    'is_admin_user',
                    'username',
                    'surname',
                    'firstname',
                    'othername', 
                    'email',
                    'phone_number', 
                    'password',
                    'address',
                    'secret_question_id',
                    'secret_answer',
                    'suspended',
                    'visible',
                    'slug',
                    'last_login',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'last_login'];

    /**
     * The string attribute that should be cast to custom carbon date.
     *
     * @var array
     */

    public function setLastLoginAttribute($last_login)
    {
         // return Carbon::createFromTimestampUTC($this->attributes['time']/1000);
        // $last_login = $this->attributes['last_login'] = strtotime($last_login);
         return \Carbon\Carbon::createFromTimeStamp(strtotime($this->attributes['last_login']))->diffForHumans();
    }


    
}
