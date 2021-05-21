<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    /**
     * このユーザが所有するお店情報。（ Shopモデルとの関係を定義）
     */
    //UserがもつShopは複数存在するため複数形で 
    public function shops()
    {
        return $this->hasMany(Shop::class);
    }
    
     /**
     * このユーザに関係するモデルの件数をロードする。
     */
    //Userが持つShopの数をカウントする
    public function loadRelationshipCounts()
    {
        $this->loadCount('shops');
    }
}
