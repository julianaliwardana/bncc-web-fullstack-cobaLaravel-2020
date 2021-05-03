<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table ='user';
    protected $fillable=[
        'id','name','email','photo'
    ];
    protected $hidden=[
        'created_at','updated_at'
    ];

    public function pertanyaan()
    {
        return $this->hasMany(Pertanyaan::class,'user_id','id');
    }
}
