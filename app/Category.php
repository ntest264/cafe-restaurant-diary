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
    
    /**
 * カテゴリーの一覧を取得
 */
    public function getLists()
    {
        $categories = Category::orderBy('id','asc')->pluck('name', 'id');
 
        return $categories;
     }
}
