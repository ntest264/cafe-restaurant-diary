<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    //ユーザーが記入する要素を記入
    protected $fillable = ['content','category','shop_name','place','other'];

    /**
     * この登録情報を所有するユーザ。（ Userモデルとの関係を定義）
     */
    //Shopを持つUserは一人なので単数で
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
