<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'name', 'email', 'password', 'image','role',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
    'password', 'remember_token',
    ];



    public function ProductList()
    {
        return $this->belongsTo('App\Product','id','user_id')->orderBy('updated_at','desc');
    }


}
