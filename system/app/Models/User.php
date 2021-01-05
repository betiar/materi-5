<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\UserDetail;

class User extends Authenticatable
{
    protected $table = 'user';
    use Notifiable;

    function detail(){
    	return $this->hasOne(UserDetail::class, 'id_user');
    }
    function produk(){
    	return $this->hasMany(Produk::class, 'id_user');
    }
    function getJenisKelaminStringAttribute(){
        return ($this->jenis_kelamin == 1) ? "Laki-laki" : "Perempuan";
    }
    function setPasswordAtrribute($value){
    	$this->attributes['password'] = bcrypt($value);
    }
    function setUsernameAttribute($value){
    	$this->attributes['username'] = strtolower($value);
    }
}
