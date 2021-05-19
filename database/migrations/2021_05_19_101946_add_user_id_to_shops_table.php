<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shops', function (Blueprint $table) {
            //符号なしBIGINTのデータの型でかなりの量の数を格納できる
            $table->unsignedBigInteger('user_id');
// ShopとUserを紐づける(外部キーを設定するカラム名、参照先のカラム名、参照先のテーブル名）の順：　外部キー制約
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shops', function (Blueprint $table) {
//外部キーを削除するdropforeignメソッド。引数は　テーブル名＿外部キー名＿foreign
        $table->dropForeign('shops_user_id_foreign');
        });
    }
}
