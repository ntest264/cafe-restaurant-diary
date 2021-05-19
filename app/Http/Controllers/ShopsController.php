<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Shop;    // Shopモデルを参照する

class ShopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // getでshops/にアクセスされた場合の「一覧表示処理」
    public function index()
    {
         // お店情報（Shopモデル）一覧を取得。$shopsに入ったデータをviewに渡す。
        $shops = Shop::all();

        // お店情報一覧ビューでそれを表示（Controllerから特定のViewを呼び出す）
        return view('shops.index', [
            //shopsという箱の中にshopsという値が入っている。
            'shops' => $shops,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // getでshops/createにアクセスされた場合の「新規登録画面表示処理」
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // postでshops/にアクセスされた場合の「新規登録処理」
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // getでshops/（任意のid）にアクセスされた場合の「取得表示処理」
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // getでshops/（任意のid）/editにアクセスされた場合の「更新画面表示処理」
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     // putまたはpatchでshops/（任意のid）にアクセスされた場合の「更新処理」
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // deleteでshops/（任意のid）にアクセスされた場合の「削除処理」
    public function destroy($id)
    {
        //
    }
}