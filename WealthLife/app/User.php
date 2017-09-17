<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
         'email', 
         'telephone',
         'speciality',
         'cellphone',
         'description',
         'photo',
         'occupation'
    ];

    /**
    * show all doctors
    */
    public function Alldoctors($perpage = null)
    {
        $doctors = User::where('occupation','=',1)->paginate($perpage);

        return $doctors;
    }
}
