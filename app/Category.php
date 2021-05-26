<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function shops()
    {
        // カテゴリは複数の登録内容を持つ
        return $this->hasMany('App\Shop');
    }
}
