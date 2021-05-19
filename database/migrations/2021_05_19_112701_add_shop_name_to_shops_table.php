<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddShopNameToShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shops', function (Blueprint $table) {
            //最大255文字まで文字列が保存できる。
            $table->string('shop_name');
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
            //カラムを削除
            $table->dropColumn('shop_name');
        });
    }
}
